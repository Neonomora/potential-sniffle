<?php

if (!function_exists('form_input')) {
    function form_input($label, $name, $type = 'text', $required = false, $attributes = []) {
        $value = old($name);
        $requiredAttr = $required ? 'required' : '';
        $requiredMark = $required ? ' *' : '';

        // Optional attributes
        $placeholder = isset($attributes['placeholder']) ? 'placeholder="' . esc($attributes['placeholder']) . '"' : '';

        echo <<<HTML
        <div class="mb-3">
            <label for="$name" class="form-label">$label$requiredMark</label>
            <input type="$type" class="form-control" id="$name" name="$name" value="$value" $placeholder $requiredAttr>
        </div>
        HTML;
    }
}

if (!function_exists('form_select')) {
    function form_select($label, $name, $options = [], $required = false, $attrs = []) {
        $selected = old($name);
        $requiredAttr = $required ? 'required' : '';
        $requiredMark = $required ? ' *' : '';

        // Default class Bootstrap form-select, bisa ditimpa di $attrs
        if (!isset($attrs['class'])) {
            $attrs['class'] = 'form-select';
        }

        $additionalAttrs = '';
        foreach ($attrs as $key => $value) {
            $additionalAttrs .= " $key=\"$value\"";
        }

        echo "<div class='mb-3'>";
        echo "<label for='$name' class='form-label'>$label$requiredMark</label>";
        echo "<select id='$name' name='$name' $requiredAttr $additionalAttrs>";
        echo "<option disabled selected>Pilih $label</option>";
        foreach ($options as $option) {
            $isSelected = ($selected == $option) ? 'selected' : '';
            echo "<option value='$option' $isSelected>$option</option>";
        }
        echo "</select></div>";
    }
}

if (!function_exists('form_textarea')) {
    function form_textarea($label, $name, $rows = 3, $required = false) {
        $value = old($name);
        $requiredAttr = $required ? 'required' : '';
        $requiredMark = $required ? ' *' : '';
        echo <<<HTML
        <div class="mb-3">
            <label for="$name" class="form-label">$label$requiredMark</label>
            <textarea class="form-control" id="$name" name="$name" rows="$rows" $requiredAttr>$value</textarea>
        </div>
        HTML;
    }
}
