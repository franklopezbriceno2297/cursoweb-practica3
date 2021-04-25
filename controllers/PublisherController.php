<?php
  require_once('models/Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'Publisher List']);
    }

    public function show($id) {
      $prof = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$prof,
         'title'=>'Publisher Detail']);
    }

    public function create() {
      return view('publisher/create',
        ['title'=>'Publisher Create']);
    }  

    public function store() {
      $name = Input::get('name');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['name'=>$name,'country'=>$country, 'founded'=>$founded,'genere'=>$genere];
      Publisher::create($item);
      return redirect('/publisher');
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
      Publisher::destroy($id);
      return redirect('/publisher');
    }
  }
?>