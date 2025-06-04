<div>
    <div x-data="{ open: false }">
        <ul class="space-y-4 text-sm sm:text-base leading-relaxed">
            <li>
                <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                Support counseling, group sessions, and growth experiences that bring healing and transformation to those in need.
            </li>
            <li>
                <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                Take part in events and workshops that support vital causes, including:
                <ul class="ml-4 space-y-2 pl-4 list-[circle] mt-2">
                    <li>Ending OSAEC</li>
                    <li>Uplifting the Disadvantaged Indigenous Peoples</li>
                    <li>Empowering the Underprivileged Children</li>
                    <li>Individuals and Families in Street Situations</li>
                    <li>Persons Affected by Leprosy</li>
                    <li>Child and Youth with Disability</li>
                </ul>
            </li>
            <template x-if="open">
                <div class="space-y-4 leading-relaxed">
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Be invited to visit Sorok Uni Village and NCR communities, where I will meet and learn from the lives I'm helping transform.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Participate in meaningful volunteer activities through Sorok Uni's outreach and development programs.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Join exclusive quarterly webinars to deepen my knowledge and connection with Sorok Uni's mission.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Raise awareness and support for the needs and rights of Filipinos through advocacy and information sharing.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Be part of the quarterly online advocacy workshops that will sharpen my voice and strengthen my impact.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Receive a digital certificate of appreciation that celebrates my commitment.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Stay connected through a monthly newsletter filled with real stories and updates.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Be informed of the annual impact report featuring inspiring success stories from the field.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Be recognized in the Annual Donor Roll for standing up and speaking out.
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        Receive an official donation receipt and, if needed, a copy of the tax exemption certificate.
                    </li>
                </div>
            </template>
        </ul>

        <button @click="open = !open" 
            class="mt-4 text-primary text-sm font-semibold hover:underline focus:outline-none flex items-center">
            <span x-text="open ? 'Show Less' : 'Show More'"></span>
            <i class="fa-solid fa-chevron-down ml-2 text-sm transition-transform duration-200" 
            :class="{ 'rotate-180': open }"></i>
        </button>
    </div>
</div>
