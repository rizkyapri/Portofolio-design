<?php

namespace App\Filament\Pages;

use App\Models\Task;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Relaticle\Flowforge\Filament\Pages\KanbanBoardPage;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\DatePicker;
use Filament\Notifications\Notification;

class TasksBoardPage extends KanbanBoardPage implements HasShieldPermissions
{
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Kanban Board';
    protected static ?string $title = 'Kanban Task Board';

    public function getSubject(): Builder
    {
        return Task::query()->withoutTrashed();
    }

    public function mount(): void
    {
        $columns = [
            'todo' => 'To Do',
            'in_progress' => 'In Progress',
            'completed' => 'Completed',
        ];
        
        if (Auth::user()?->hasRole('super_admin')) {
            $columns['archived'] = 'Archived';
        }

        $colors = [
            'todo' => 'blue',
            'in_progress' => 'yellow',
            'completed' => 'green',
        ];

        if (array_key_exists('archived', $columns)) {
            $colors['archived'] = 'gray';
        }

        $this
            ->titleField('title')
            ->orderField('sort_order')
            ->columnField('status')
            ->columns($columns)
            ->columnColors($colors)
            ->descriptionField('description')
            ->cardAttributes([
                'due_date' => 'Due Date',
                'assignee.name' => 'Assigned To',
            ])
            ->cardAttributeColors([
                'due_date' => 'red',
                'assignee.name' => 'yellow',
            ])
            ->cardAttributeIcons([
                'due_date' => 'heroicon-o-calendar',
                'assignee.name' => 'heroicon-o-user',
            ]);
    }

    public function createAction(Action $action): Action
    {
        return $action
            ->authorize('create', Task::class) // Cek permission
            ->iconButton()
            ->icon('heroicon-o-plus')
            ->modalHeading('Create Task')
            ->modalWidth('xl')
            ->form(function (Form $form) {
                return $form->schema([
                    TextInput::make('title')
                        ->required()
                        ->placeholder('Enter task title')
                        ->columnSpanFull(),
                    Textarea::make('description')
                        ->columnSpanFull(),
                    Select::make('assignee_id')
                        ->label('Assigned To')
                        ->relationship('assignee', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable(),

                    DatePicker::make('due_date')
                        ->label('Due Date')
                        ->nullable(),

                    // Add more form fields as needed
                ]);
            });
    }

    public function editAction(Action $action): Action
    {
        return $action
            ->authorize('update', Task::class)
            ->modalHeading('Edit Task')
            ->modalWidth('xl')
            ->form(function (Form $form) {
                return $form->schema([
                    TextInput::make('title')
                        ->required()
                        ->placeholder('Enter task title')
                        ->columnSpanFull(),
                    Textarea::make('description')
                        ->columnSpanFull(),
                    Select::make('status')
                        ->options([
                            'todo' => 'To Do',
                            'in_progress' => 'In Progress',
                            'completed' => 'Completed',
                        ])
                        ->required(),
                    Select::make('assignee_id')
                        ->label('Assigned To')
                        ->relationship('assignee', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable(),

                    DatePicker::make('due_date')
                        ->label('Due Date')
                        ->nullable(),
                ]);
            })
            ->extraModalFooterActions([
                Action::make('delete')
                    ->label('Delete')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->authorize('delete', Task::class) // ini penting
                    ->action(function ($record) {
                        if ($record) {
                            $record->delete();

                            Notification::make()
                                ->title('Task deleted successfully.')
                                ->success()
                                ->send();

                            redirect('/admin/tasks-board-page');
                        }
                    }),
            ]);
    }
}
