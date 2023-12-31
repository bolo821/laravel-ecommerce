@props(['position' => 'left'])

<v-tabs
    position="{{ $position }}"
    {{ $attributes }}
>
    <x-shop::shimmer.tabs/>
</v-tabs>

@pushOnce('scripts')
    <script type="text/x-template" id="v-tabs-template">
        <div>
            <div
                class="flex gap-[30px] justify-center pt-[18px] bg-[#F5F5F5] max-1180:hidden"
                :style="positionStyles"
            >
                <div
                    v-for="tab in tabs"
                    class="pb-[18px] px-[30px] text-[20px] font-medium text-[#7D7D7D] cursor-pointer"
                    :class="{'text-black border-navyBlue border-b-[2px] transition': tab.isActive }"
                    v-text="tab.title"
                    @click="change(tab)"
                >
                </div>
            </div>

            <div>
                {{ $slot }}
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-tabs', {
            template: '#v-tabs-template',

            props: ['position'],

            data() {
                return {
                    tabs: []
                }
            },

            computed: {
                positionStyles() {
                    return [
                        `justify-content: ${this.position}`
                    ];
                },
            },

            methods: {
                change(selectedTab) {
                    this.tabs.forEach(tab => {
                        tab.isActive = (tab.title == selectedTab.title);
                    });
                },
            },
        });
    </script>
@endPushOnce
