
@php
    $countries  = config('countries', []);
    $fieldId    = $fieldId ?? \Illuminate\Support\Str::camel($name);
    $required   = $required ?? true;
    $selected   = old($name, $value ?? '');
    $selectedCode = array_search($selected, $countries) ?: null;
@endphp

<div class="abew-field">
    <label for="{{ $fieldId }}Search" id="{{ $fieldId }}Label">
        {{ $label }} @if($required)<span class="req">*</span>@endif
    </label>

    <div class="abew-cs" data-country-select>
        <input type="hidden" name="{{ $name }}" value="{{ $selected }}" data-cs-value>

        <button type="button" class="abew-cs-toggle" data-cs-toggle
                aria-haspopup="listbox" aria-expanded="false" aria-labelledby="{{ $fieldId }}Label">
            <span class="abew-cs-selected" data-cs-selected>
                @if ($selectedCode)
                    <img src="https://flagcdn.com/24x18/{{ $selectedCode }}.png"
                         srcset="https://flagcdn.com/48x36/{{ $selectedCode }}.png 2x"
                         width="24" height="18" alt="">
                    <span>{{ $selected }}</span>
                @else
                    <span class="abew-cs-placeholder">Selecione o país…</span>
                @endif
            </span>
            <svg class="abew-cs-chevron" width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="abew-cs-panel" data-cs-panel hidden>
            <input type="text" class="abew-cs-search" data-cs-search
                   id="{{ $fieldId }}Search" placeholder="Pesquisar país…" autocomplete="off">
            <ul class="abew-cs-list" data-cs-list role="listbox">
                @foreach ($countries as $code => $countryName)
                    <li>
                        <button type="button" class="abew-cs-option {{ $selected === $countryName ? 'is-selected' : '' }}"
                                role="option" data-cs-option
                                data-value="{{ $countryName }}" data-code="{{ $code }}">
                            <img src="https://flagcdn.com/24x18/{{ $code }}.png"
                                 srcset="https://flagcdn.com/48x36/{{ $code }}.png 2x"
                                 width="24" height="18" loading="lazy" alt="">
                            <span>{{ $countryName }}</span>
                        </button>
                    </li>
                @endforeach
                <li class="abew-cs-empty" data-cs-empty hidden>Nenhum país encontrado</li>
            </ul>
        </div>
    </div>
</div>

@once
    <style>
        .abew-cs {
            position: relative;
        }

        .abew-cs-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #c7d2de;
            border-radius: 6px;
            background: #fbfcfe;
            font-size: 15px;
            color: #2b3a4a;
            cursor: pointer;
            text-align: left;
            font-family: inherit;
        }

        .abew-cs-toggle:focus {
            outline: none;
            border-color: #1a6fb5;
            box-shadow: 0 0 0 3px rgba(26, 111, 181, 0.15);
        }

        .abew-cs.is-open .abew-cs-toggle {
            border-color: #1a6fb5;
        }

        .abew-cs-selected {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .abew-cs-selected span {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .abew-cs-selected img {
            flex-shrink: 0;
            border-radius: 2px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.08);
        }

        .abew-cs-placeholder {
            color: #8a97a5;
        }

        .abew-cs-chevron {
            flex-shrink: 0;
            color: #6a7684;
            transition: transform 0.15s ease;
        }

        .abew-cs.is-open .abew-cs-chevron {
            transform: rotate(180deg);
        }

        .abew-cs-panel {
            position: absolute;
            top: calc(100% + 4px);
            left: 0;
            right: 0;
            z-index: 50;
            background: #fff;
            border: 1px solid #c7d2de;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(11, 58, 111, 0.15);
            overflow: hidden;
        }

        .abew-cs-search {
            width: 100%;
            padding: 10px 12px;
            border: none;
            border-bottom: 1px solid #e4eaf1;
            font-size: 14px;
            font-family: inherit;
        }

        .abew-cs-search:focus {
            outline: none;
            background: #f5f9fd;
        }

        .abew-cs-list {
            list-style: none;
            margin: 0;
            padding: 4px;
            max-height: 260px;
            overflow-y: auto;
        }

        .abew-cs-option {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 8px 10px;
            border: none;
            border-radius: 5px;
            background: transparent;
            font-size: 14px;
            color: #2b3a4a;
            cursor: pointer;
            text-align: left;
            font-family: inherit;
        }

        .abew-cs-option img {
            flex-shrink: 0;
            border-radius: 2px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.08);
        }

        .abew-cs-option:hover,
        .abew-cs-option.is-active {
            background: #eef4fb;
        }

        .abew-cs-option.is-selected {
            background: #e2eefa;
            font-weight: 600;
        }

        .abew-cs-empty {
            padding: 12px;
            font-size: 14px;
            color: #8a97a5;
            text-align: center;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const normalize = str => str.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();

            document.querySelectorAll('[data-country-select]').forEach(function (root) {
                const toggle      = root.querySelector('[data-cs-toggle]');
                const panel       = root.querySelector('[data-cs-panel]');
                const search      = root.querySelector('[data-cs-search]');
                const list        = root.querySelector('[data-cs-list]');
                const hiddenInput = root.querySelector('[data-cs-value]');
                const selectedEl  = root.querySelector('[data-cs-selected]');
                const emptyEl     = root.querySelector('[data-cs-empty]');
                const options     = Array.from(root.querySelectorAll('[data-cs-option]'));

                function open() {
                    panel.hidden = false;
                    root.classList.add('is-open');
                    toggle.setAttribute('aria-expanded', 'true');
                    search.value = '';
                    filter('');
                    search.focus();
                    const current = list.querySelector('.is-selected');
                    if (current) current.scrollIntoView({ block: 'center' });
                }

                function close() {
                    panel.hidden = true;
                    root.classList.remove('is-open');
                    toggle.setAttribute('aria-expanded', 'false');
                }

                function filter(term) {
                    const q = normalize(term.trim());
                    let visible = 0;
                    options.forEach(function (opt) {
                        const match = normalize(opt.dataset.value).includes(q);
                        opt.parentElement.hidden = !match;
                        if (match) visible++;
                    });
                    emptyEl.hidden = visible > 0;
                }

                function select(opt) {
                    hiddenInput.value = opt.dataset.value;
                    options.forEach(o => o.classList.toggle('is-selected', o === opt));
                    selectedEl.innerHTML =
                        '<img src="https://flagcdn.com/24x18/' + opt.dataset.code + '.png" ' +
                        'srcset="https://flagcdn.com/48x36/' + opt.dataset.code + '.png 2x" ' +
                        'width="24" height="18" alt=""><span></span>';
                    selectedEl.querySelector('span').textContent = opt.dataset.value;
                    close();
                    toggle.focus();
                }

                toggle.addEventListener('click', function () {
                    panel.hidden ? open() : close();
                });

                search.addEventListener('input', function () {
                    filter(search.value);
                });

                search.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') { close(); toggle.focus(); }
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const first = options.find(o => !o.parentElement.hidden);
                        if (first) select(first);
                    }
                });

                options.forEach(function (opt) {
                    opt.addEventListener('click', function () { select(opt); });
                });

                document.addEventListener('click', function (e) {
                    if (!root.contains(e.target)) close();
                });
            });
        });
    </script>
@endonce
