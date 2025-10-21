<?php

namespace App\Filament\Resources\Employees\Schemas;

use App\Models\Employee;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->label('First Name')
                    ->required()
                    ->minLength(2)
                    ->maxLength(50),
                TextInput::make('last_name')
                    ->label('Last Name')
                    ->required()
                    ->minLength(2)
                    ->maxLength(50),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email() // ensures valid email format
                    ->required()
                    ->unique(Employee::class, 'email', ignoreRecord:true), // ensures email uniqueness

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->tel() // sets HTML input type to "tel"
                    ->required()
                    ->rules(['required', 'digits:10', 'numeric'])
                    ->unique(Employee::class, 'phone', ignoreRecord:true) // ensures email uniqueness
                    ->helperText('Enter a 10-digit phone number')
                    ->validationAttribute('phone number'),

                TextInput::make('position')
                    ->label('Position / Job Title')
                    ->required()
                    ->minLength(4)
                    ->maxLength(100),

                TextInput::make('salary')
                ->label('Salary')
                ->numeric() // ensures only numeric input
                ->required()
                ->minValue(1000)
                ->maxValue(10000000) // arbitrary upper limit to prevent unrealistic entries
                ->prefix('$') // adds $ before the input field (optional)
                ->placeholder('5000.00')
                ->helperText('Enter a salary'),
            ]);
    }
}
