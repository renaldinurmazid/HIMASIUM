<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('user_id')
                //     ->required()
                //     ->numeric(),
                // TextInput::make('category_id')
                //     ->numeric(),
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->readOnly()
                    ->dehydrated()
                    ->required(),
                MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->label('Banner')
                    ->directory('posts')
                    ->disk('public')
                    ->columnSpanFull()
                    ->image(),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if ($state === 'published' && ! $get('published_at')) {
                            $set('published_at', now());
                        }
                    })
                    ->required(),
                Select::make('category_id')
                    ->label('Categories')
                    ->relationship('category', 'name')
                    ->required(),
                DateTimePicker::make('published_at')
                    ->native(false)
                    ->required(fn (callable $get) => $get('status') === 'published'),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                TextInput::make('meta_keywords'),
            ]);
    }
}
