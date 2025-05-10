<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Landing Page';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('description')->required(),
                FileUpload::make('image')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image1')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image2')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image3')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image4')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image5')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image6')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                FileUpload::make('image7')->directory('project')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
                TextInput::make('link')->required()->prefix('https://')
                    ->suffix('.my.id'),
                DatePicker::make('tanggal_awal'),
                DatePicker::make('tanggal_akhir'),
                TextInput::make('company'),
                TextInput::make('posisi'),
                FileUpload::make('logo')->directory('company')->previewable(fn(string $operation): bool => $operation !== 'edit')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('description')->limit(40),
                ImageColumn::make('image'),
                // ImageColumn::make('image1'),
                // ImageColumn::make('image2'),
                // ImageColumn::make('image3'),
                // ImageColumn::make('image4'),
                // ImageColumn::make('image5'),
                // ImageColumn::make('image6'),
                // ImageColumn::make('image7'),
                // TextColumn::make('link'),
                TextColumn::make('company'),
                ImageColumn::make('logo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist     $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('title'),
                TextEntry::make('description')->columnSpanFull(),
                ImageEntry::make('image'),
                ImageEntry::make('image1'),
                ImageEntry::make('image2'),
                ImageEntry::make('image3'),
                ImageEntry::make('image4'),
                ImageEntry::make('image5'),
                ImageEntry::make('image6'),
                ImageEntry::make('image7'),
                TextEntry::make('link'),
                TextEntry::make('company'),
                ImageEntry::make('logo'),
                TextEntry::make('posisi'),
                TextEntry::make('tanggal_awal'),
                TextEntry::make('tanggal_akhir'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProjects::route('/'),
        ];
    }
}
