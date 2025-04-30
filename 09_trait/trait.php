<?php
trait Pesan {
    public function kirim() {
        echo "Mengirim pesan...\n";
    }
}

class Chat {
    use Pesan;
}

$chat = new Chat();
$chat->kirim();
