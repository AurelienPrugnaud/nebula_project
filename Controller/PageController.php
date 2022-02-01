<?php
    namespace Aurelien\Nebula\Controller;

    use \Aurelien\Nebula\Template;

    class PageController {

        public function __construct(string $file, array $data) {
            $this->file = $file;
            $this->template = new Template;
            $this->get_data();
            $this->data = array_merge($this->data, $data);
            $this->render($file, $this->data);
        }

        private function render(string $file, array $data) {
            $this->template->display($file, $data);
        }

        private function get_data() {
            $this->data = [
                'exemple' => [
                    'exemple' => 'exemple',
                    'exemple' => 'exemple'
                ],
            ];

            return $this->data;
        }

    }