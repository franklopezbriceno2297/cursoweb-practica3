<?php
  require_once('models/Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>Book::all(),
        'title'=>'Books List']);
    }

    public function show($id) {
      $prof = Book::find($id);
      return view('book/show',
        ['book'=>$prof,
         'title'=>'Book Detail']);
    }

    public function create() {
      return view('book/create',
        ['title'=>'Book Create']);
    }  

    public function store() {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $language = Input::get('language');
      $copyright = Input::get('copyright');
      $pages = Input::get('pages');
      $authorid = Input::get('authorid');
      $publisherid = Input::get('publisherid');

      $item = [
        'title'=>$title, 
        'edition'=>$edition, 
        'language'=>$language, 
        'copyright'=>$copyright, 
        'pages'=>$pages, 
        'author_id'=>$authorid, 
        'publisher_id'=>$publisherid
      ];
      Book::create($item);
      return redirect('/book');
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
      Book::destroy($id);
      return redirect('/book');
    }
  }
?>