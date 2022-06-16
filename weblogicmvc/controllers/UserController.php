<?php  

require_once './models/User.php';
require_once './controllers/BaseAuthController.php'; 

class UserController extends BaseAuthController
{

	public function index()
    {

        $users = User::all();
        $this->makeView('user','index', ['users'=>$users]);
    }

    public function create()
    {

       
        $this->makeView('user','create');
    }

    public function store()
    {
        if(($_POST['username'] != " "))
        {
            $user = new User($_POST);
            if($user->is_valid()){
                $user->save();
                $this->redirectToRoute('user','index');
            } else{
                $this-> makeView('user','create');
            }
        }
        else{
            $this->makeView('user','create');
        }



    }

    public function edit($id)
    {
        $user = User::find([$id]);
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