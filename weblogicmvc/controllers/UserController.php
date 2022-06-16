<?php  

require_once './models/User.php';
require_once './controllers/BaseAuthController.php'; 

class UserController extends BaseAuthController
{

	public function index()
    {
        //$this->loginFilterByRole('administrador');
        $users = User::all();
        $this->makeView('user','index', ['users'=>$users]);
    }

    public function create()
    {
       // $this->loginFilterByRole('administrador');
       
        $this->makeView('user','create');
    }

    public function store()
    {
        $user = new User($_POST);
        
       
        if($user->is_valid()){
            //$user->save();
            $this->redirectToRoute('user','index');
        } else {
            //redirect to form with data and errors
           $this->makeView('user','create',['user'=>$user]);
        }
    }

    public function edit($id)
    {
        $users = User::find([$id]);

        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->makeView('user','edit', ['user' => $user]);
        }
    }

   public function show($id){
        $user = User::find([$id]);

        if (is_null($user)) {

        } else {
            $this->makeView('user','show', ['user' => $user]);
        }
    }

    public function update($id){
        //$this->loginFilterByRole('administrador');
        $user=User::find([$id]);
        $user->update_attributes($_POST);

        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('user','index');
        }else{
            $this->redirectToRoute('user','update', ['user' => $user]);
        }
    }

}
?>