<?php require_once('../header.php'); ?>
<?php require_once('../user_check.php'); ?>

<?php
if (!isset($_GET['book'])) die("No book specified!");
$book = filter_input(INPUT_GET, 'book', FILTER_SANITIZE_NUMBER_INT);
$book = new library($book,TRUE);
?>

<nav>
  <ul class="pager">
  <?php if ($book->neighbors->prev): ?>
    <?php if ('Adult' == $book->neighbors->prevcat):?>
      <li class="previous danger"><a href="viewBook.php?book=<?php echo $book->neighbors->prev;?>"><span aria-hidden="true">&larr;</span> [Adult Content]</a></li>
    <?php else:?>
      <li class="previous"><a href="viewBook.php?book=<?php echo $book->neighbors->prev;?>"><span aria-hidden="true">&larr;</span> <?php echo $book->neighbors->prevtitle;?></a></li>
    <?php endif;?>
  <?php endif;?>
  <li><a href="catalog.php">&uarr; Catalog</a></li>
  <?php if ($user->legit):?>
    <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Flag for deletion</a></li>
  <?php endif;?>

  <?php if ($book->neighbors->next): ?>
    <?php if ('Adult' == $book->neighbors->nextcat):?>
      <li class="next danger"><a href="viewBook.php?book=<?php echo $book->neighbors->next;?>">[Adult Content] <span aria-hidden="true">&rarr;</span></a></li>
    <?php else:?>
      <li class="next"><a href="viewBook.php?book=<?php echo $book->neighbors->next;?>"><?php echo $book->neighbors->nexttitle;?> <span aria-hidden="true">&rarr;</span></a></li>
    <?php endif;?>
  <?php endif;?>
  </ul>
</nav>

<div class="panel panel-<?php echo $book->class;?>">
  <div class="panel-heading">
    <p class="pull-right"><?php echo $book->label;?></p>
    <h3 class="panel-title"><?php echo $book->title;?> <small>by <?php echo $book->author;?></small></h3>
  </div>
  <div class="panel-body">
    <?php echo $book->content;?>
    </font></i></i> <!-- to catch any unclosed font tags -->
  </div>
  <div class="panel-footer">
  <?php if ($user->legit):?>
    <p class="pull-right">
      (Actually published by <?php echo $book->ckey;?>)
    </p>
    <?php endif;?>
    Published <?php echo $book->datetime;?>
  </div>
</div>

<?php require_once('../footer.php'); ?>