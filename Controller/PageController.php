<?php
    namespace Aurelien\Nebula\Controller;

    use \Aurelien\Nebula\Template;
    use \Aurelien\Nebula\Game;
    use \Aurelien\Nebula\Category;
    use \Aurelien\Nebula\Developper;
    use \Aurelien\Nebula\Editor;
    use \Aurelien\Nebula\Platform;
    use \Aurelien\Nebula\Pegi;
    use \Aurelien\Nebula\Requirement;
    use \Aurelien\Nebula\Language;
    use \Aurelien\Nebula\Image;
    use \Aurelien\Nebula\Paragraph;
    use \Aurelien\Nebula\Type;

    class PageController {

        public function __construct(string $file, array $data) {
            $this->file = $file;
            $this->template = new Template();
            $this->game = new Game();
            $this->games = $this->game->getGamesList();
            $this->category = new Category();
            $this->categories = $this->category->getCategoriesList();
            $this->developper = new Developper();
            $this->developpers = $this->developper->getDeveloppersList();
            $this->editor = new Editor();
            $this->editors = $this->editor->getEditorsList();
            $this->platform = new Platform();
            $this->platforms = $this->platform->getPlatformsList();
            $this->pegi = new Pegi;
            $this->pegis = $this->pegi->getPegisList();
            $this->requirement = new Requirement;
            $this->requirements = $this->requirement->getRequirementsList();
            $this->language = new Language;
            $this->languages = $this->language->getLanguagesList();
            $this->image = new Image;
            $this->images = $this->image->getImagesList();
            $this->paragraph = new Paragraph;
            $this->paragraphs = $this->paragraph->getParagraphsList();
            $this->type = new Type;
            $this->types = $this->type->getTypesList();
            $this->get_data();
            $this->data = array_merge($this->data, $data);
            $this->render($file, $this->data);
        }

        private function render(string $file, array $data) {
            $this->template->display($file, $data);
        }

        private function get_data() {
            $this->data = [
                'games' => $this->games,
                'categories' => $this->categories,
                'developpers' => $this->developpers,
                'editors' => $this->editors,
                'platforms' => $this->platforms,
                'pegis' => $this->pegis,
                'requirements' => $this->requirements,
                'languages' => $this->languages,
                'images' => $this->images,
                'paragraphs' => $this->paragraphs,
                'types' => $this->types
            ];

            return $this->data;
        }


    }
