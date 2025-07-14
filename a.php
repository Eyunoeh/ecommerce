<?php

class Transaction {
    public $voterId;
    public $candidate;

    public function __construct($voterId, $candidate) {
        $this->voterId = $voterId;
        $this->candidate = $candidate;
    }
}

class Block {
    public $index;
    public $timestamp;
    public $transactions;
    public $previousHash;
    public $hash;
    public $nonce;

    public function __construct($index, $timestamp, $transactions, $previousHash = '') {
        $this->index = $index;
        $this->timestamp = $timestamp;
        $this->transactions = $transactions;
        $this->previousHash = $previousHash;
        $this->nonce = 0;
        $this->hash = $this->calculateHash();
    }

    public function calculateHash() {
        return hash('sha256', $this->index . $this->timestamp . json_encode($this->transactions) . $this->previousHash . $this->nonce);
    }

    public function mineBlock($difficulty) {
        while (substr($this->hash, 0, $difficulty) !== str_repeat('0', $difficulty)) {
            $this->nonce++;
            $this->hash = $this->calculateHash();
        }
        echo "Block mined: {$this->hash}\n";
    }
}

class Blockchain {
    public $chain;
    public $difficulty;

    public function __construct($difficulty) {
        $this->chain = [$this->createGenesisBlock()];
        $this->difficulty = $difficulty;
    }

    public function createGenesisBlock() {
        $genesisTransactions = [
            new Transaction('123', 'A'),
            new Transaction('456', 'B'),
            new Transaction('789', 'C'),
        ];
        return new Block(0, $_SERVER['REQUEST_TIME'], $genesisTransactions, '0');
    }

    public function getLatestBlock() {
        return end($this->chain);
    }

    public function addBlock($newTransactions) {
        $newBlock = new Block(count($this->chain), $_SERVER['REQUEST_TIME'], $newTransactions, $this->getLatestBlock()->hash);
        $newBlock->mineBlock($this->difficulty);
        $this->chain[] = $newBlock;
    }

    public function isChainValid() {
        for ($i = 1; $i < count($this->chain); $i++) {
            $currentBlock = $this->chain[$i];
            $previousBlock = $this->chain[$i - 1];

            if ($currentBlock->hash !== $currentBlock->calculateHash()) {
                return false;
            }

            if ($currentBlock->previousHash !== $previousBlock->hash) {
                return false;
            }
        }

        return true;
    }
}

// Example usage:

$difficulty = 4; // Adjust difficulty according to your needs
$blockchain = new Blockchain($difficulty);

// Add blocks with transactions
$blockchain->addBlock([
    new Transaction('101', 'D'),
    new Transaction('112', 'E'),
    new Transaction('123', 'F'),
]);

$blockchain->addBlock([
    new Transaction('456', 'C'),
    new Transaction('789', 'H'),
    new Transaction('910', 'I'),
]);

$blockchain->addBlock([
    new Transaction('111', 'J'),
    new Transaction('222', 'B'),
    new Transaction('333', 'L'),
]);
$blockchain->addBlock([
    new Transaction('393', 'J'),
    new Transaction('316', 'K'),
    new Transaction('336', 'L'),
]);

// Check if the blockchain is valid
echo "Is blockchain valid? " . ($blockchain->isChainValid() ? 'Yes' : 'No') . "<br>";
