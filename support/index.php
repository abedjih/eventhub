<?php

declare(strict_types=1);

$dir = __DIR__;
$files = array_filter(
    scandir($dir) ?: [],
    static fn(string $file): bool =>
        $file !== 'index.php'
        && !str_starts_with($file, '.')
        && is_file($dir . '/' . $file)
        && preg_match('/\.(html|pdf)$/i', $file) === 1,
);

sort($files);

$formatName = static function (string $filename): string {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = str_replace(['-', '_'], ' ', $name);
    return ucfirst($name);
};

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supports de formation</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            background: #0F1729;
            color: #EDF5FA;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .container {
            max-width: 640px;
            width: 100%;
        }
        h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: .5rem;
        }
        .subtitle {
            color: #8899AA;
            font-size: .95rem;
            margin-bottom: 2rem;
        }
        .list {
            display: flex;
            flex-direction: column;
            gap: .75rem;
        }
        .list a {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.25rem;
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: .75rem;
            color: #EDF5FA;
            text-decoration: none;
            transition: background .2s, border-color .2s;
        }
        .list a:hover {
            background: rgba(255, 255, 255, .1);
            border-color: #0DA5B2;
        }
        .icon {
            width: 40px;
            height: 40px;
            border-radius: .5rem;
            background: #0678BE;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
        }
        .icon.pdf { background: #E8601C; }
        .info { flex: 1; min-width: 0; }
        .info .name {
            font-weight: 600;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .info .meta {
            color: #8899AA;
            font-size: .8rem;
            margin-top: .15rem;
        }
        .arrow {
            color: #8899AA;
            font-size: 1.2rem;
            transition: transform .2s;
        }
        .list a:hover .arrow {
            transform: translateX(4px);
            color: #0DA5B2;
        }
        .empty {
            text-align: center;
            color: #8899AA;
            padding: 3rem 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Supports de formation</h1>
        <p class="subtitle"><?= count($files) ?> support<?= count($files) > 1 ? 's' : '' ?> disponible<?= count($files) > 1 ? 's' : '' ?></p>

        <div class="list">
            <?php if (empty($files)): ?>
                <p class="empty">Aucun support disponible.</p>
            <?php else: ?>
                <?php foreach ($files as $file):
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $size = filesize($dir . '/' . $file);
                    $sizeLabel = $size >= 1048576
                        ? round($size / 1048576, 1) . ' Mo'
                        : round($size / 1024) . ' Ko';
                ?>
                    <a href="<?= htmlspecialchars($file, ENT_QUOTES) ?>">
                        <div class="icon <?= $ext === 'pdf' ? 'pdf' : '' ?>">
                            <?= $ext === 'pdf' ? '&#128196;' : '&#128240;' ?>
                        </div>
                        <div class="info">
                            <div class="name"><?= htmlspecialchars($formatName($file)) ?></div>
                            <div class="meta"><?= strtoupper($ext) ?> &middot; <?= $sizeLabel ?></div>
                        </div>
                        <span class="arrow">&rarr;</span>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
