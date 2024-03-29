<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
        ]);

        $newStudent = Student::create($data);
        return redirect(route('student.index'));
    }

    // public function show(string $id)
    // {       
    // }
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
        ]);

        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Student not found.');
        }

        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();

        return redirect(route('student.index'))->with('success', 'Student Updated Successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Student not found.');
        }

        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }
}



// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;

// class ProductController extends Controller
// {
    //     public function index(){
        //         $products = Product::all();
        //         return view('products.index', ['products' => $products]);
        
        //     }
        
        //     public function create(){
            //         return view('products.create');
            //     }
            
            //     public function store(Request $request){
                //         $data = $request->validate([
                    //             'name' => 'required',
                    //             'qty' => 'required|numeric',
                    //             'price' => 'required|decimal:0,2',
                    //             'description' => 'nullable'
                    //         ]);
                    
                    //         $newProduct = Product::create($data);
                    
                    //         return redirect(route('product.index'));
                    
                    //     }
                    
                    //     public function edit(Product $product){
                        //         return view('products.edit', ['product' => $product]);
                        //     }
                        
    //     public function update(Product $product, Request $request){
        //         $data = $request->validate([
            //             'name' => 'required',
            //             'qty' => 'required|numeric',
            //             'price' => 'required|decimal:0,2',
            //             'description' => 'nullable'
            //         ]);
            
            //         $product->update($data);
            
            //         return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');
            
            //     }
            
            //     public function destroy(Product $product){
                //         $product->delete();
                //         return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
                //     }
                // }
                
                
                // public function store(Request $request)
                //                 {
                    //                     $request->validate([
                        //                         'name' => 'required|string|max:255',
//                         'age' => 'required|integer|min:1',
//                     ]);

//                     $student = new Student;
//                     $student->name = $request->name;
//                     $student->age = $request->age;
//                     $student->save();

//                     return redirect()->route('students.index')->with('success', 'Student added successfully.');
//                 }


// public function edit($id)
// {
//     $student = Student::find($id);

//     if (!$student) {
//         return redirect()->route('students.index')->with('error', 'Student not found.');
//     }

//     return view('students.edit', ['student' => $student]);
// }