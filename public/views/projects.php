<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>PROJECTS</title>
</head>

<body>
<div class="container">

        <main>
            <header>
                <div class="search-bar">
                    <input placeholder="search project">
                </div>
                <a href="/profil">Back</a>
            </header>
            <section class="projects">
                <?php foreach ($projects as $project): ?>
                    <div id="project-1">
                        <img src="public/uploads/<?= $project->getImage(); ?>">
                        <div>
                            <h2><?= $project->getTitle(); ?></h2>
                            <p><?= $project->getDescription(); ?></p>


                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>

</div>
</body>

<template id="project-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fas fa-minus-square"> 0</i>
            </div>
        </div>
    </div>
</template>