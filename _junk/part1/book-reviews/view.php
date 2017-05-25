<?php
    $this->params['breadcrumbs'][] = ['label' => 'Book Reviews', 'url' => ['/book-reviews']];
    $this->params['breadcrumbs'][] = $book_title;
?>

<h1>Review for book ID <?= $id ?></h1>

<table class="table table-striped table-bordered">

    <tr>
        <td>Book Title</td>
        <td><?= $book_title ?></td>
    </tr>
    <tr>
        <td>Author</td>
        <td><?= $author ?></td>
    </tr>
    <tr>
        <td>Amazon URL</td>
        <td><a href="<?= $amazon_url ?>">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                Amazon
            </a>
        </td>
    </tr>

</table>
<?php
$data['yourName'] = "Starsky";
echo $this->context->renderPartial('_advert', $data);
