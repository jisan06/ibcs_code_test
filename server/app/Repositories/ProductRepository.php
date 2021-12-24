<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

/**]
 * Class ProductRepository
 * @package App\Repositories
 * @version January 24, 2020, 3:37 pm +0330
 */
class ProductRepository extends BaseRepository
{
    /**
     * @var string
     */
    public $viewPrefix = 'admin.products.';

    /**
     * @var string
     */
    private $cacheKey = 'products';

    /**
     * @var string
     */
    public $paginateNum = 10;
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'sku',
        'description',
    ];


    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }


    public function createProduct($request): Product
    {
        $input = $request;
        $input['sku'] = date('ymdHms');
        $image_parameters = [
            'image' => $input->photo,
            'directory' => 'products',
        ];
        $input['image'] = ImageHelper::Image($image_parameters);
        $product = $this->model->create($input->all());
        //clear cache
        if (Cache::has($this->cacheKey)) {
            Cache::forget($this->cacheKey);
        }
        return $product;
    }

    public function updateProduct($request, int $id): bool
    {
        $this->checkId($id);
        $input = $request;
        $product = $this->find($id);
        $this->forgetCache();
        if($input->photo){
            $image_parameters = [
                'image' => $input->photo,
                'directory' => 'products',
            ];
            $input['image'] = ImageHelper::Image($image_parameters);
        }

        return $product->update($input->all());
    }

    public function destroy(int $id): bool
    {
        $this->checkId($id);
        $product = $this->model->withTrashed()->findOrFail($id);
            $product = $product->forceDelete();
        Cache::forget($this->cacheKey);
        return $product;

    }

    private function forgetCache()
    {
        if (Cache::has($this->cacheKey)) {
            Cache::forget($this->cacheKey);
        }
    }

    public function searchProduct($object){
        $products = $this->model()::Where('product_name', 'like', '%' . $object['search_key'] . '%')
            ->get();
        return $products;
    }


}
