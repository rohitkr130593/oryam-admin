<?php

namespace App\Filament\Resources;


use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
        TextInput::make('name')
            ->required(),

        TextInput::make('slug')
            ->required(),

        Toggle::make('is_active')
            ->default(true),
    ]);
    }

    public static function table(Table $table): Table
    {
            return $table
        ->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('slug')
                ->searchable(),

            IconColumn::make('is_active')
                ->boolean()
                ->label('Active'),

            TextColumn::make('created_at')
                ->dateTime('d M Y')
                ->sortable(),
        ])
        ->defaultSort('created_at', 'desc');
}

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
