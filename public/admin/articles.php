<?php
require '../src/bootstrap.php';

$articles = $cms->getArticle()->getAll();

$navigation = [
    ['name' => 'Categories', 'url' => '../admin/categories.php'],
    ['name' => 'Articles', 'url' => '../admin/articles.php'],
];
$section = '';

include '../admin/header.php';
?>
<main class="container mx-auto flex justify-center flex-col items-center">
    <header class="p-10">
        <h1 class="text-4xl text-blue-500 mb-8">Articles</h1>
        <button class="text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600"><a href="article.php">Add new article</a></button>
    </header>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10 text-center">
        <thead class="text-xl text-white uppercase bg-gray-50 dark:bg-gray-700">
            <tr>
                <th class="px-6 py-3">Image</th>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Created</th>
                <th class="px-6 py-3">Category</th>
                <th class="px-6 py-3">Published</th>
                <th class="px-6 py-3">Edit</th>
                <th class="px-6 py-3">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr class="bg-white border-b dark:bg-gray-800">
                    <td>
                        <img src="../uploads/<?php echo e($article['image_file']) ?>" alt="<?php echo e($article['image_alt']) ?>">
                    </td>
                    <td class="px-6 py-4 font-medium text-white whitespace-nowrap"><?php echo e($article['title']) ?></td>
                    <td class="px-6 py-4 font-medium text-white whitespace-normal"><?php echo e($article['created']) ?></td>
                    <td class="px-6 py-4 font-medium text-white whitespace-normal"><?php echo e($article['category']) ?></td>
                    <td class="px-6 py-4 font-medium text-white whitespace-normal"><?php echo e($article['published']) ?></td>
                    <td class="px-6 py-4 font-medium text-white whitespace-normal"><a href="article.php?id=<?php echo $article['id'] ?>">Edit</a></td>
                    <td class="px-6 py-4 font-medium text-blue-600 whitespace-normal"><a href="article_delete.php?id=<?php echo $article['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../admin/footer.php'; ?>