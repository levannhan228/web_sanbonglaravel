<?php
namespace App\Http\Controllers;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;
use App\Stadium;
class ExportControllerStadium implements FromCollection, WithHeadings
{
    public function collection()
    {
        return $stadium = Stadium::select('id','manager_name','name','phone','email','facebook','province_city','location','surface','img','price','user_id')->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Manager Name',
            'Name',
            'Phone',  
            'Email',
            'Facebook',
            'Province City',
            'Location',
            'Surface',
            'img',
            'price',
            'user_id'
        ];
    }
    public function export_stadium(){
        return Excel::download(new ExportControllerStadium(), 'stadium.xlsx');
    }
}
