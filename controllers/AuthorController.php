<?php
  require_once('models/Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index',
       ['authors'=>Author::all(),
        'title'=>'Author List']);
    }

    public function show($id) {
      $prof = Author::find($id);
      return view('author/show',
        ['author'=>$prof,
         'title'=>'Author Detail']);
    }

    public function create() {
      return view('author/create',
        ['title'=>'Create Author']);
    }  

    public function store() {
      $name = Input::get('name');
      $nationality = Input::get('nationality');
      $birthyear = Input::get('birthyear');
      $fields = Input::get('fields');
      $item = ['name'=>$name,'nationality'=>$nationality, 'birth_year'=>$birthyear,'fields'=>$fields];
      Author::create($item);
      return redirect('/author');
    }  

    // public function edit($id) {
    //   $prof = Professor::find($id);
    //   return view('professor/edit',
    //     ['professor'=>$prof,
    //      'title'=>'Professor Edit']);
    // }  

    // public function update($_,$id) {
    //   $name = Input::get('name');
    //   $degree = Input::get('degree');
    //   $email = Input::get('email');
    //   $phone = Input::get('phone');
    //   $item = ['name'=>$name,'degree'=>$degree,
    //            'email'=>$email,'phone'=>$phone];
    //   Professor::update($id,$item);
    //   return redirect('/professor');
    // }  

    public function destroy($id) {  
      Author::destroy($id);
      return redirect('/author');
    }
  }
?>