<?php 
  include_once('templates/header.php');

  if(isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $current_post;

    foreach($posts as $post) {
      if($post['id'] == $post_id) {
        $current_post = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $current_post['title'] ?></h1>
      <p id="post-description"><?= $current_post['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $current_post['description'] ?>">
      </div>
      <p class="post-content">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea praesentium laborum possimus fugiat sit, ipsum, non accusantium id dolorem ullam amet dolores totam laudantium ex reprehenderit iusto earum saepe! Corrupti?
        Non maiores, ipsa quia quasi dolorem minima aliquam deleniti doloribus? Est quibusdam soluta vitae dolor dicta reiciendis facilis, voluptas cumque maiores voluptatibus dolores nemo beatae a. Sit veritatis facere aut?
        Dolorum fuga nesciunt nihil. Praesentium harum, id neque dolorum vero non. Maiores obcaecati reiciendis, ex voluptatum delectus porro molestiae modi nobis laboriosam, illo odit numquam itaque consequuntur voluptates sed sequi.
        Quam optio labore sequi rerum consequatur error. Amet veniam mollitia quo totam itaque accusamus, autem est temporibus, minima non assumenda aliquid hic atque quis dolore aut quam nulla qui? Qui?
        Pariatur nostrum repellendus quasi veniam maxime, accusantium nisi facere consequatur dignissimos, placeat repudiandae magni accusamus cum modi consectetur mollitia soluta laudantium libero cupiditate eius, voluptates totam molestias? Obcaecati, quam quasi?
      </p>
      <p class="post-content">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint illum quis natus voluptatem sunt magni repellat. Quidem, possimus? Reprehenderit ullam natus quaerat necessitatibus voluptas cum voluptatum veritatis excepturi reiciendis accusamus.
        Quo hic dolore officia neque veritatis praesentium vitae nulla similique laudantium laborum sint debitis enim magni corrupti, nobis, nihil consectetur corporis sunt facere dolores saepe totam maxime quos reiciendis. Pariatur?
        Animi hic perspiciatis consequatur? Illum quae in quibusdam illo, vitae dolorem, exercitationem aut recusandae reiciendis, officia cupiditate natus expedita atque laborum itaque! In doloremque dolorum provident, optio corporis reprehenderit distinctio.
        Tempore ratione porro ut maiores aperiam minus, assumenda quae id rem dignissimos libero temporibus delectus saepe nostrum quo quaerat eaque dicta esse natus magni. Temporibus alias doloremque fugiat vitae accusantium.
        Aliquid earum dicta saepe sapiente nostrum, fugiat animi sunt modi in porro ullam tempora inventore soluta dolore laboriosam magni delectus. Voluptates officia reiciendis dolore assumenda quisquam illo enim minima ipsum.
      </p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($current_post['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
  
      <h3 id="categories-title">Categorias</h3>
      <ul id="tag-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php include_once('templates/footer.php') ?>