<?php
namespace App\Http\Controllers;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;
use App\User;
class ExportControllerUser implements FromCollection, WithHeadings
{
    public function collection()
    {
        return $user = User::select('id','account','password','last_name','name','email','phone','permissions','created_at','updated_at')->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Account',
            'Password',
            'Last Name',  
            'Name',
            'Email',
            'Phone',
            'Permissions',
            'Create At',
            'Updated At'
        ];
    }
    public function export(){
        return Excel::download(new ExportControllerUser(), 'user.xlsx');
    }
}
