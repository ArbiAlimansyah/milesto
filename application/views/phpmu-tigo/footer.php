<?php
echo "<div class='wrapper'>
	<ul class='right'>";
$topmenu2 = $this->model_utama->view_where('menu', array('position' => 'Top', 'aktif' => 'Ya'), 'urutan', 'ASC', 0, 5);
foreach ($topmenu2->result_array() as $row) {
	echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
}
echo "</ul>
	<p class='footer'>Copyright &copy;" . date('Y') . ". All Rights reserved.<br/>Powered by <b style='color:salmon'><a href='http://www.facebook.com'>AA Company</a></b></p>
</div>";
