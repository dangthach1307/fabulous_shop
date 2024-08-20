<form action="">
    <div class="block product-price-range">
        <div class="block-title">Price</div>
        <div class="block-content">
            <div class="slider-range">
                <div data-label-result="Range:" data-min="10" data-max="999" data-unit="$"
                    class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                    data-value-min="{{ str_replace('$', '', request('price_min')) }}"
                    data-value-max="{{ str_replace('$', '', request('price_max')) }}">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                </div>
                <div class="amount-range-price">
                    <input type="text" id="minamount" name="price_min" />&nbsp; -
                    &nbsp;&nbsp;&nbsp;<input type="text" id="maxamount" name="price_max" />
                </div>
                <button class="button filter-price" title="Submit" type="submit"><span>Filter</span></button>
            </div>
        </div>
    </div>
    <div class="block block-layered-nav">
        <div class="block-title">Shop By</div>
        <div class="block-content">
            <p class="block-subtitle">Shopping Options</p>

            <dl id="narrow-by-list">
                <dt class="odd">Category</dt>
                <dd class="filter-category">
                    <ol>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('shop.category', $category->slug) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="filter-manufacturer">
                    @foreach ($brands as $brand)
                        <div class="brand-item">
                            <label for="brands-{{ $brand->id }}">

                            <input  type="checkbox"
                                    {{ (request('brand')[$brand->id] ?? '') == 'on' ? 'checked' : '' }}
                                    id="brands-{{ $brand->id }}"
                                    name="brand[{{ $brand->id }}]"
                                    onchange="this.form.submit()">
                                <span class="checkmark"></span>
                                {{ $brand->name }}
                            </label>
                        </div>
                    @endforeach
                </dd>

                <dt class="odd">Size</dt>
                <div class="size-area">
                    <div class="size-item">
                        <input type="radio" id="s-size" name="size" value="S" onchange="this.form.submit()"
                            {{ request('size') == 'S' ? 'checked' : '' }}>
                        <label for="s-size" class="{{ request('size') == 'S' ? 'active' : '' }}">S
                        </label>
                    </div>
                    <div class="size-item">
                        <input type="radio" id="m-size" name="size" value="M" onchange="this.form.submit()"
                            {{ request('size') == 'M' ? 'checked' : '' }}>
                        <label for="m-size" class="{{ request('size') == 'M' ? 'active' : '' }}">M
                        </label>
                    </div>
                    <div class="size-item">
                        <input type="radio" id="l-size" name="size" value="L" onchange="this.form.submit()"
                            {{ request('size') == 'L' ? 'checked' : '' }}>
                        <label for="l-size" class="{{ request('size') == 'L' ? 'active' : '' }}">L
                        </label>
                    </div>
                    <div class="size-item">
                        <input type="radio" id="xl-size" name="size" value="XL" onchange="this.form.submit()"
                            {{ request('size') == 'XL' ? 'checked' : '' }}>
                        <label for="xl-size" class="{{ request('size') == 'XL' ? 'active' : '' }}">XL
                        </label>
                    </div>
                    <div class="size-item">
                        <input type="radio" id="xxl-size" name="size" value="XXL" onchange="this.form.submit()"
                            {{ request('size') == 'XXL' ? 'checked' : '' }}>
                        <label for="xl-size" class="{{ request('size') == 'XXL' ? 'font-weight-bold' : '' }}">XXL
                        </label>
                    </div>
                </div>
                <dt class="even">Color</dt>
                <dd class="color-area">
                    <div class="color-item">
                        <input type="radio" id="color-green" name="color" value="green"
                            onchange="this.form.submit()" {{ request('color') == 'green' ? 'checked' : '' }}>
                        <label for="color-green"
                            class="{{ request('color') == 'green' ? 'font-weight-bold' : '' }}">Green
                        </label>
                    </div>
                    <div class="color-item">
                        <input type="radio" id="color-white" name="color" value="white"
                            onchange="this.form.submit()" {{ request('color') == 'white' ? 'checked' : '' }}>
                        <label for="color-white"
                            class="{{ request('color') == 'white' ? 'font-weight-bold' : '' }}">White</label>
                    </div>
                    <div class="color-item">
                        <input type="radio" id="color-black" name="color" value="black"
                            onchange="this.form.submit()" {{ request('color') == 'black' ? 'checked' : '' }}>
                        <label for="color-black"
                            class="{{ request('color') == 'black' ? 'font-weight-bold' : '' }}">Black</label>
                    </div>
                    <div class="color-item">
                        <input type="radio" id="color-gray" name="color" value="gray"
                            onchange="this.form.submit()" {{ request('color') == 'gray' ? 'checked' : '' }}>
                        <label for="color-gray"
                            class="{{ request('color') == 'gray' ? 'font-weight-bold' : '' }}">Gray</label>
                    </div>
                    <div class="color-item">
                        <input type="radio" id="color-darkgray" name="color" value="darkgray"
                            onchange="this.form.submit()" {{ request('color') == 'darkgray' ? 'checked' : '' }}>
                        <label for="color-darkgray"
                            class="{{ request('color') == 'darkgray' ? 'font-weight-bold' : '' }}">Darkgray</label>
                    </div>
                    <div class="color-item">
                        <input type="radio" id="color-blue" name="color" value="blue"
                            onchange="this.form.submit()" {{ request('color') == 'blue' ? 'checked' : '' }}>
                        <label for="color-blue"
                            class="{{ request('color') == 'blue' ? 'font-weight-bold' : '' }}">Blue</label>
                    </div>
                </dd>



            </dl>

        </div>
    </div>
</form>
