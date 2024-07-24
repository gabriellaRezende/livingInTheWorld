<?php
function generateBreadcrumb() {
    // Mapeamento de URL para nomes amigáveis
    $urlToNameMap = [
        'index.php' => 'Home',
        'about.php' => 'Sobre Nós',
        'services.php' => 'Serviços',
        'contacto.php' => 'Contato',
    ];

    // Obter a URL atual
    $path = $_SERVER['REQUEST_URI'];
    $path = trim($path, '/');
    $pathArray = explode('/', $path);

    // Iniciar o breadcrumb com o link para a página inicial
    $breadcrumb = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    $breadcrumb .= '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';

    // Construir o breadcrumb dinamicamente
    $currentPath = '';
    foreach ($pathArray as $key => $value) {
        $currentPath .= '/' . $value;
        $displayName = isset($urlToNameMap[$value]) ? $urlToNameMap[$value] : ucfirst($value);

        if ($key == count($pathArray) - 1) {
            // Último item (página atual)
            $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . $displayName . '</li>';
        } else {
            // Itens intermediários
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . $currentPath . '">' . $displayName . '</a></li>';
        }
    }

    $breadcrumb .= '</ol></nav>';
    return $breadcrumb;
}
?>