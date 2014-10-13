<?php 
if(isset($_GET['id'])){
	//si on demande un article particulier 
?>


	<div class="article">
			<img src="http://2.gravatar.com/avatar/test?s=60" alt="avatar_venteur" class="avatar">
			<h2>Vends ceci-cela</h2>
			<br>
			<a href="#" class="toggle-photos">Les photos</a>
			<div id="photos" style="display:none;">
				<img src="annonces/photos/1.JPG">
				<img src="annonces/photos/2.JPG">
				<img src="annonces/photos/3.JPG">
			</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos expedita labore natus nemo, deleniti aspernatur vitae beatae? Libero, obcaecati iste dolores, esse aliquam atque eaque dolorum et, ratione neque deleniti.</p>
	</div>
	<a href="./?page=articles#header" class="retour">&larr; Retour</a>

	<script>

	$(function(){
		$(".toggle-photos").on("click",function(e){
			e.preventDefault();
			$("#photos").slideToggle();
		})
	});

	</script>


<?php 
} else {
//si on veut voir la liste
?>
	Bonjour je suis le contenu!
	<div class="article">
		<img src="http://2.gravatar.com/avatar/test?s=60" alt="avatar_venteur" class="avatar">
		<a href="./?page=articles&id=1#header" class="lien-article">
			<h2>Vends ceci-cela</h2>
		</a>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos expedita labore natus nemo, deleniti aspernatur vitae beatae? Libero, obcaecati iste dolores, esse aliquam atque eaque dolorum et, ratione neque deleniti.</p>
	</div>

	<div class="article">Ipsum, possimus necessitatibus nesciunt obcaecati consectetur aspernatur tenetur. Iusto, quibusdam minima veniam rerum nisi quos expedita deserunt tempore maiores accusamus quam similique laudantium itaque, est blanditiis unde dignissimos. Necessitatibus, dolore.</div>
	<div class="article">Fuga fugit ipsa voluptatum accusantium sunt eius optio soluta atque perferendis iure. Fugit dolor nesciunt modi fugiat mollitia aut. Voluptatem, quae, corrupti? Odit inventore, impedit est corporis. Vero, ab, atque.</div>
	<div class="article">Eum accusamus delectus commodi, iste et placeat tenetur adipisci, reiciendis consectetur voluptas doloremque, dicta? Praesentium porro dolorum enim fuga, fugit, corrupti sint pariatur, autem voluptate laudantium inventore molestiae exercitationem alias.</div>
	<div class="article">Voluptatem, ratione recusandae? Provident sequi doloribus officia, eius, eum eveniet nihil unde labore corporis facere ea velit ex iusto, atque necessitatibus iure incidunt. Deserunt illum in est labore et nihil.</div>
	<div class="article">Autem hic, eius tempora minima, voluptatibus nostrum in amet. Autem, ipsam, impedit. Quisquam similique ipsa cumque veniam sequi commodi ducimus et a praesentium. Sint impedit dolore unde saepe, dolorem est!</div>
	<div class="article">Molestias nisi itaque nemo ducimus odit voluptas rem tenetur est id, aliquid explicabo quam, hic velit, perferendis assumenda eum inventore, voluptatum possimus eveniet praesentium architecto et autem. Expedita, saepe, delectus.</div>
	<div class="article">Quam dolor et odio fugit. Deserunt ipsa repellat, ducimus fuga odit obcaecati, autem incidunt amet officiis nostrum doloremque mollitia aspernatur. Blanditiis delectus aspernatur molestiae consequuntur minima illo amet sunt laboriosam.</div>
	<div class="article">Ipsum aperiam vitae, quo dignissimos expedita voluptatibus cupiditate beatae ad, laborum iusto eaque sed harum voluptates vero impedit placeat fugit. Iste consectetur officia dolore numquam minima, sed veniam quaerat nobis.</div>
	<div class="article">Alias reprehenderit ad, quia commodi a at ex totam ea optio ratione amet quae soluta velit, voluptatem! Libero omnis voluptates quo sapiente itaque consectetur, molestiae repellendus obcaecati animi, earum reiciendis.</div>
<?php } ?>