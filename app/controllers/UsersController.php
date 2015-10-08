<?php
class UsersController extends BaseController
{
public function index()
{
     $__count= Userevent::count();

     if($__count)
     $tasks=Userevent::all();
     else
	 $tasks='';
	
	 $__count= User1event::count();

     if($__count)
     $tasks1=User1event::all();
     else
	 $tasks1='';

     $__count= User2event::count();

     if($__count)
     $tasks2=User2event::all();
     else
	 $tasks2='';

	 $__count= User3event::count();

     if($__count)
     $tasks3=User3event::all();
     else
	 $tasks3='';

     $__count= User4event::count();

     if($__count)
     $tasks4=User4event::all();
     else
	 $tasks4='';

      $__count= User5event::count();

     if($__count)
     $tasks5=User5event::all();
     else
	 $tasks5='';

    $__count= User1event::count();

     if($__count)
     $tasks6=User6event::all();
     else
	 $tasks6='';


     $__count= User7event::count();

     if($__count)
     $tasks7=User7event::all();
     else
	 $tasks7='';


    $__count= User8event::count();

     if($__count)
     $tasks8=User8event::all();
     else
	 $tasks8='';

   $__count= User9event::count();

     if($__count)
     $tasks9=User9event::all();
     else
	 $tasks9='';


$__count= User10event::count();

     if($__count)
     $tasks10=User10event::all();
     else
	 $tasks10='';

$__count= User11event::count();

     if($__count)
     $tasks11=User11event::all();
     else
	 $tasks11='';

$__count= User12event::count();

     if($__count)
     $tasks12=User12event::all();
     else
	 $tasks12='';

$__count= User13event::count();

     if($__count)
     $tasks13=User13event::all();
     else
	 $tasks13='';

$__count= User14event::count();

     if($__count)
     $tasks14=User14event::all();
     else
	 $tasks14='';

$__count= User15event::count();

     if($__count)
     $tasks15=User15event::all();
     else
	 $tasks15='';

$__count= User16event::count();

     if($__count)
     $tasks16=User16event::all();
     else
	 $tasks16='';

$__count= User17event::count();

     if($__count)
     $tasks17=User17event::all();
     else
	 $tasks17='';

$__count= User18event::count();

     if($__count)
     $tasks18=User18event::all();
     else
	 $tasks18='';

	$data=array('tasks'=>$tasks,'tasks1'=>$tasks1,'tasks2'=>$tasks2,'tasks3'=>$tasks3,'tasks4'=>$tasks4,'tasks5'=>$tasks5,'tasks6'=>$tasks6,'tasks7'=>$tasks7,'tasks8'=>$tasks8,'tasks9'=>$tasks9,'tasks10'=>$tasks10,'tasks11'=>$tasks11,'tasks12'=>$tasks12,'tasks13'=>$tasks13,'tasks14'=>$tasks14,'tasks15'=>$tasks15,'tasks16'=>$tasks16,'tasks17'=>$tasks17,'tasks18'=>$tasks18);
	//return View::make('index',compact('tasks'));
	return View::make('index')->with('mixdata',$data);

}
public function displayevent($id)
{
         switch($id)
		 { 
          case 1:
		  $tasks=Userevent::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 2:
		  $tasks=User1event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 3:
		  $tasks=User2event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
          case 4:
		  $tasks=User3event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 5:
		  $tasks=User4event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 6:
		  $tasks=User5event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 7:
		  $tasks=User6event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
          case 8:
		  $tasks=User7event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 9:
		  $tasks=User8event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 10:
		  $tasks=User9event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 11:
		  $tasks=User10event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 12:
		  $tasks=User11event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
          case 13:
		  $tasks=User12event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 14:
		  $tasks=User13event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
          case 15:
		  $tasks=User14event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 16:
		  $tasks=User15event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 17:
		  $tasks=User16event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		  case 18:
		  $tasks=User17event::all();
		  return View::make('displayevent',compact('tasks'));
          break;
		 }
}  
public function evento_lista()
{
return View::make('evento-lista');
}
public function evento_fechado()
{
return View::make('evento-fechado');
}
public function addevent($id=null)
{
   if($_POST)
   {
   
   
		  $input=Input::all();
		  $rules=array('Event'=>'required','date'=>'required');
          $validator=Validator::make($input,$rules);
          if($validator->fails())
          {
           return Redirect::action('UsersController@addevent')->withErrors($validator)->withInput(); 
          }
		  switch($input['tablenum'])
		  {
		  case 1:
		  $task=new Userevent;
		  break;
		  case 2:
		  $task=new User1event;
		  break;
		  case 3:
		  $task=new User2event;
		  break;
		  case 4:
		  $task=new User3event;
		  break;
		  case 5:
		  $task=new User4event;
		  break;
		  case 6:
		  $task=new User5event;
		  break;
		  case 7:
		  $task=new User6event;
		  break;
		  case 8:
		  $task=new User7event;
		  break;
		  case 9:
		  $task=new User8event;
		  break;
		  case 10:
		  $task=new User9event;
		  break;
		  case 11:
		  $task=new User10event;
		  break;
		  case 12:
		  $task=new User11event;
		  break;
		  case 13:
		  $task=new User12event;
		  break;
		  case 14:
		  $task=new User13event;
		  break;
		  case 15:
		  $task=new User14event;
		  break;
		  case 16:
		  $task=new User15event;
		  break;
		  case 17:
		  $task=new User16event;
		  break;
		  case 18:
		  $task=new User17event;
		  break;
		  }
		  //$task=new User1event;
          
		  $task->eventname=$input['Event']; 
          $task->date=$input['date'];
          $task->save();

          $file=$input['Event'].".csv";
          if(file_exists($file))
	      {!unlink($file);
          }
          $file = fopen($file,"w");
          $output= 'eventname:'.$input['Event'].',date:'.$input['date'];
          fputcsv($file,explode(',',$output));
	      //$tasks=Userevent::all();
		  return Redirect::action('UsersController@index'); 
          //return View::make('index',compact('tasks'));
	  }
	  else
	  {

	      switch($id)
		  {
		     case 1:
			 $data=1;
			 break;
			 case 2:
			 $data=2;
			 break;
			 case 3:
			 $data=3;
			 break;
			 case 4:
			 $data=4;
			 break;
			 case 5:
			 $data=5;
			 break;
			 case 6:
			 $data=6;
			 break;
			 case 7:
			 $data=7;
			 break;
			 case 8:
			 $data=8;
			 break;
			 case 9:
			 $data=9;
			 break;
			 case 10:
			 $data=10;
			 break;
			 case 11:
			 $data=11;
			 break;
			 case 12:
			 $data=12;
			 break;
			 case 13:
			 $data=13;
			 break;
			 case 14:
			 $data=14;
			 break;
			 case 15:
			 $data=15;
			 break;
			 case 16:
			 $data=16;
			 break;
			 case 17:
			 $data=17;
			 break;
			 case 18:
		     $data=18;
			 break;
		  }
	  return View::make('event')->with('table',$data);
	  }
}
public function evento()
{

    if($_POST)
	{
      $input=Input::all();
      $rules=array('nome'=>'required','email'=>array('required','email'),'tel'=>'required');
      $validator=Validator::make($input,$rules);
      if($validator->fails())
      {
       return Redirect::action('UsersController@evento')->withErrors($validator)->withInput(); 
      }
	  else
	  {
	      $task=new User;
          $task->name=$input['nome']; 
          $task->email=$input['email'];
          $task->phone=$input['tel'];
          $task->save();
	 
	    
	 $data = array('name'=>$input['nome'],'eventname'=>'DUMMY','email'=>$input['email'],'tel'=>$input['tel']);
     $email=$input['email'];
     $name=$input['nome'];	
Mail::send('emails.contactemail', $data, function($message) use($email,$name)
{
    $subject='=?UTF-8?B?' . base64_encode("Jack Daniel's Saloon - Confirmação ") . '?=';

	$message->to($email, $name)->subject($subject.date('d')."/".date('m')."");
});


		  if($task->count('*')>=5)
	      {
		  $this->filedownload();
		  return View::make('evento-fechado');
		  }
	      else
		  {
		    $data= User::count();
		    //return View::make('evento-lista');
		    return View::make('event')->with('table',$data);
		  }
	  }
	}
	else
	{

	  $task=new User;

	  if($task->count('*')>=5)
	  {

	  $this->filedownload();
	 
	  return View::make('evento-fechado');
	  }
	  else
      return View::make('evento');
	   
	}
  }
  private function filedownload()
  {

      $file="userinfo.csv";
      if(file_exists($file))
	  {!unlink($file);
      }
      $file = fopen("userinfo.csv","w");
      $task=new User;
      $tasks=$task->all();
	  $output='';  
      foreach($tasks as $newtask)
      {
       $output.= 'id:'.$newtask->id.',name:'.$newtask->name.',email:'.$newtask->email.',phone:'.$newtask->phone;
      }
	  	   fputcsv($file,explode(',',$output));
	 	
  }
}
?>