<h4>Création d'une variable <code>$me</code> permettant de récupérer les informations de l'utilisateur : </h4>

<pre>/* Controller > AppController.php */

if($this->Auth->loggedIn()){
	$this->set('me', $this->Auth->user());
}
else{
	$this->set('me', array('id'=>0,'username'=>'Invited'));
}
</pre>
<p>* Verification si utilisateur connecté<br/>
* Création d'une variable "me" grâce à la méthode "set"<br/>
* Attribution des informations utilisateur à "me" => $this->Auth->user()<br/>
* Si utilisateur non connecté ==> me = (id = 0, username = Invited);<p/>








<h4>Affichage du nom de l'utilisateur :</h4>

<pre>
/* View > Themed > Bootstrap > Elements > menu > top-menu.ctp */

if($me['id'] != 0){	
	echo $this->Html->link('Logout', array(
	   'controller'=>'users','action' => 'logout'
	));
}
else{
	 echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'));
}
</pre>
<p>* Verification si l'id de "me" n'est pas égale à 0, donc utilisateur connecté<br/>
	* Affichage d'un lien de déconnexion 	<br/>
* Sinon<br/>
	* Affichage du lien de connexion</p>



	
<pre>echo 'Welcome '.$me['username']	</pre>

<p>* Affichage du nom de l'utilisateur : <br/>
	* Veritable nom si connecté<br/>
	* "Invited" si non connecté</p>

