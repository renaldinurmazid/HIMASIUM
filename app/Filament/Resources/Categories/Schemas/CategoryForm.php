<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                ColorPicker::make('color')
                    ->required(),
                // Textarea::make('description')
                //     ->columnSpanFull(),
                // TextInput::make('parent_id')
                //     ->numeric(),
            ]);
    }
}
