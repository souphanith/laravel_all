<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\student;

class StudentsComponent extends Component
{
    
    public $student_id, $name, $email, $phone, $student_edit_id, $student_delete_id;

    public $view_student_id, $view_name, $view_email, $view_phone;

    public $showModal = true;
    public $deleteModal = true;

    public function rules()
    {
        return [
            'student_id' => 'required|min:3|unique:students,student_id'.$this->student_edit_id.'',
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
        ];
    }
    public function storeStudentData()
    {
        $this->validate();
        $data = [
            'student_id'=>$this->student_id,
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
        ];
    // insert data
        student :: create($data);   

        $this->student_id = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';

        session()->flash('message','ບັນທຶກສຳເລັດ');

        if($this->showModal = true){
            return redirect()->to('student');
        }

        
    }

    public function resetinput()
    {
        $this->student_id = '';
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->student_edit_id = '';
    }

    public function editstudent($id)
    {
        $student = student::where('id',$id)->first();

        $this->student_edit_id = $student->id;
        
        $this->student_id = $student->student_id;         //1/2
        $this->name = $student->name;                     //1/1
        $this->email = $student->email;
        $this->phone = $student->phone;

        
    }
    public function editStudentData()
    {
        student::Find($this->student_edit_id)->fill([
            'student_id'=>$this->student_id,                     //1
            'name'=>$this->name,                         
            'emil'=>$this->email,
            'phone'=>$this->phone
        ])->save();


        // $student = student::where('id',$this->student_edit_id)->first();     
        // $student->student_id = $this->student_id;
        // $student->name = $this->name;
        // $student->email = $this->email;                        //2
        // $student->phone = $this->phone;

        // $student->save();
//======================================================================
         $this->student_id = '';
         $this->name = '';
         $this->email = '';
         $this->phone = '';
 
         session()->flash('message','ອັບເດດແລ້ວທຶກສຳເລັດ');

         if($this->showModal = true){
            return redirect()->to('student');
        }

    }


    public function deleteConfirm($id)
    {
        
        $this->student_delete_id = $id;
    }

    public function deletestudentData()
    {
        $stdelete = student::where('id', $this->student_delete_id)->first();
        $stdelete->delete();

        session()->flash('message','Delete is success fully 5555');

        $this->student_delete_id = '';

        if($this->deleteModal = true){
            return redirect()->to('student');
        }
    }

    public function viewStudent($id)
    {
        $student = student::where('id',$id)->first();
        
        $this->view_student_id = $student->student_id;        
        $this->view_name = $student->name;                     
        $this->view_email = $student->email;
        $this->view_phone = $student->phone;
    }

    public function render()
    {
        $students = student::all();

        return view('livewire.students-component',['students'=>$students])->layout('livewire.layouts.base');
    }

}
