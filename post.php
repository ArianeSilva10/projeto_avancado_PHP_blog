<?php
    include_once('./templates/header.php');

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if ($post['id'] == $postId) {
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
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro accusamus fuga doloremque quam odit, unde quas omnis minus error officia et voluptatibus nulla aliquam quidem adipisci at officiis sit pariatur.
            Alias labore impedit unde temporibus iste nostrum distinctio quos tenetur fugit odit consequuntur, nobis soluta odio eos mollitia obcaecati quo vel facere, minus eligendi id. Animi commodi eveniet aliquid aperiam.
            Enim excepturi eaque, aliquid accusamus commodi deleniti dignissimos laudantium omnis delectus qui non ipsa magnam quas sequi numquam debitis, repudiandae molestiae? Vel asperiores reprehenderit maiores a excepturi iste eos dolorum?
            Commodi voluptas magni vitae aliquid, voluptates dolores illum reprehenderit fugit nam, consectetur, fuga laudantium provident sint perspiciatis minima facilis similique dicta dolorum iusto dolorem enim? Rerum harum corporis nisi! Ratione.
            Alias cupiditate voluptate tempore soluta, neque natus temporibus sit ducimus vitae accusamus sapiente excepturi. Ipsa animi omnis nisi ab sapiente, reprehenderit iusto recusandae magni sed facere voluptatem voluptates laborum minus?</p>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro accusamus fuga doloremque quam odit, unde quas omnis minus error officia et voluptatibus nulla aliquam quidem adipisci at officiis sit pariatur.
            Alias labore impedit unde temporibus iste nostrum distinctio quos tenetur fugit odit consequuntur, nobis soluta odio eos mollitia obcaecati quo vel facere, minus eligendi id. Animi commodi eveniet aliquid aperiam.
            Enim excepturi eaque, aliquid accusamus commodi deleniti dignissimos laudantium omnis delectus qui non ipsa magnam quas sequi numquam debitis, repudiandae molestiae? Vel asperiores reprehenderit maiores a excepturi iste eos dolorum?
            Commodi voluptas magni vitae aliquid, voluptates dolores illum reprehenderit fugit nam, consectetur, fuga laudantium provident sint perspiciatis minima facilis similique dicta dolorum iusto dolorem enim? Rerum harum corporis nisi! Ratione.
            Alias cupiditate voluptate tempore soluta, neque natus temporibus sit ducimus vitae accusamus sapiente excepturi. Ipsa animi omnis nisi ab sapiente, reprehenderit iusto recusandae magni sed facere voluptatem voluptates laborum minus?

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro accusamus fuga doloremque quam odit, unde quas omnis minus error officia et voluptatibus nulla aliquam quidem adipisci at officiis sit pariatur.
            Alias labore impedit unde temporibus iste nostrum distinctio quos tenetur fugit odit consequuntur, nobis soluta odio eos mollitia obcaecati quo vel facere, minus eligendi id. Animi commodi eveniet aliquid aperiam.
            Enim excepturi eaque, aliquid accusamus commodi deleniti dignissimos laudantium omnis delectus qui non ipsa magnam quas sequi numquam debitis, repudiandae molestiae? Vel asperiores reprehenderit maiores a excepturi iste eos dolorum?
            Commodi voluptas magni vitae aliquid, voluptates dolores illum reprehenderit fugit nam, consectetur, fuga laudantium provident sint perspiciatis minima facilis similique dicta dolorum iusto dolorem enim? Rerum harum corporis nisi! Ratione.
            Alias cupiditate voluptate tempore soluta, neque natus temporibus sit ducimus vitae accusamus sapiente excepturi. Ipsa animi omnis nisi ab sapiente, reprehenderit iusto recusandae magni sed facere voluptatem voluptates laborum minus?
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
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
<?php
    include_once('./templates/footer.php');
?>