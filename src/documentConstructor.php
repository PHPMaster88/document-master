<?php
    namespace PHPMaster88\document;
	/**
     * PDF Class
     * 
     * (c) John Yusuf Habila <Senestro88@gmail.com>
     * 
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
	 */
	class documentConstructor{
		public function __construct(string $document=''){
            $document = strtoupper($document);
            if ($document == "PDF") {
                define('FPDF_FONTPATH', realpath(__DIR__)."/fpdf/font");
            }
        }
	}