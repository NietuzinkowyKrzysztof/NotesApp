<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="message">
        <?php
        if (!empty($params['before']) && $params['before'] == 'created')
            echo '<p>Note has been created</p>';
        elseif (!empty($params['before']) && $params['before'] == 'edited')
            echo '<p>NotaNote has been edited</p>';
        elseif (!empty($params['before']) && $params['before'] == 'deleted')
            echo '<p>Note has been deleted</p>';
        else if (!empty($params['error']) == 'notFound')
            echo '<p>Make sure that ID is correct</p>';
        ?>
    </div>
    <header>
        <h1>
            NotesApp
        </h1>

    </header>

    <main>
        <aside>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/?action=create">Create note</a>
                </li>
            </ul>
        </aside>

        <?php
        require_once("templates/pages/$page.php");
        ?>

    </main>

    <footer>
        <p>Krzysztof Weichert</p>
    </footer>
</body>

</html>