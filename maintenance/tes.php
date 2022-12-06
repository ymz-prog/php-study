<?php

echo __FILE__;
// パスワードのファイル
// /Applications/MAMP/htdocs/maintenance/tes.php

// パス暗号化
echo '<br>';
echo (password_hash('p@ssword1', PASSWORD_BCRYPT));
// $2y$10$EgNn/cifNjk1dWTU8u6LYOnZ1saLpvI3fIcrpiDSxdPku9nzrr1H2
