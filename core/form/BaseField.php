<?php 

namespace app\core\form;

use app\core\Model;

/**  
 * Class BaseField 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package app\core\form
 */

abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**  
     * BaseField constructor.
     * 
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute),
        );
    }
}