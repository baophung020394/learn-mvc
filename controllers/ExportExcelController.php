<?php 

class ExportExcelController {
    public function exportExcel() {
        require_once('models/ExportExcelModel.php');
        $exportExcelModel = new ExportExcelModel();
        $exportExcelModel->exportExcel();

        require_once('views/ExportView.php');
        $exportView = new ExportView();
        $exportView->doExportExcel();

    }
}