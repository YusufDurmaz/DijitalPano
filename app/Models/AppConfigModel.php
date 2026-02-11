<?php

namespace App\Models;

use CodeIgniter\Model;

class AppConfigModel extends Model
{
    protected $table = "app_config";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = "array";
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ["config_value"];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = "datetime";
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeDelete = ["preventDelete"];

    protected function preventDelete(array $data)
    {
        throw new \RuntimeException("AppConfig kayıtları silinemez.");
    }

    public function getConfigValues(?array $keys = null)
    {
        if ($keys === null) {
            $data = $this->select("config_key, config_value")->findAll();
        } else {
            $data = $this->select("config_key, config_value")
                ->whereIn("config_key", $keys)
                ->findAll();
        }

        $returnData = [];
        foreach ($data as &$item) {
            $returnData[$item["config_key"]] = $item["config_value"];
        }
        return $returnData;
    }

    public function updateConfigValues(array $data)
    {
        $this->updateBatch($data, "id");
    }
}
