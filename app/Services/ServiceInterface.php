<?php

namespace App\Services;

interface ServiceInterface
{
    public function getAll();

    public function find($id);

    public function create($data);

    public function update($id, $data);
    public function changeStatus($id);
    public function delete($id);
    public function restore($id);
    public function destroy($id);
}
