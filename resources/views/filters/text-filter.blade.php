<input type="text"
       class="{{ $cssClass }}"
       value="{{ $value }}"
       name="filters[{{ $name }}]"
       v-model="filters['{{ $name }}']"
       v-on:keyup="filter()"
       v-on:keyup.enter="filter(true)"
>
