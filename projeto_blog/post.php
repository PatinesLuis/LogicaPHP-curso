<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-contente">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta aliquam consectetur fugiat, placeat tempore, eius nobis magnam officia ipsam saepe quam eligendi vitae. Error itaque fugiat sunt tempore velit.
                Deserunt praesentium labore voluptates incidunt unde assumenda nesciunt eos tempore eligendi. Quia at doloribus cupiditate nesciunt a officiis, atque reprehenderit provident, esse tempora eaque aliquid consequatur itaque sapiente explicabo earum.
                Voluptas quod repellat assumenda provident odio quo modi qui ut laboriosam quas. Harum, temporibus id voluptates ducimus error quasi inventore non eum illum voluptatum maiores quis aut iste atque. Quasi!
                Delectus reprehenderit, tenetur recusandae, quo ut voluptates iusto eius eum ullam enim laboriosam, atque vel blanditiis nobis fuga sequi facilis voluptatem eos. Quibusdam, amet perferendis? Molestiae architecto aperiam eos cumque!
                Ducimus sapiente laboriosam omnis repellendus recusandae cum incidunt? Deleniti fugiat ullam, minus, excepturi incidunt optio laboriosam nam dolore unde vitae eveniet animi quasi consequuntur necessitatibus dolorem assumenda voluptates quos commodi.
            </p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
              <?php foreach($currentPost['tags'] as $tag): ?>
                  <li><a href="#"><?= $tag ?></a></li>
                  <?php endforeach; ?> 
              </ul>
              <h3 id="categories-title">Categorias</h3>
              <ul id="categories-list">
              <?php foreach($categories as $category): ?>
                  <li><a href="#"><?= $category ?></a></li>
                  <?php endforeach; ?>
              </ul>
    </aside>
    </main>

<?php
    include_once("templates/footer.php");