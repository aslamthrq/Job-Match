<div tabindex="0" class="mb-10 rounded-md p-4 focus:outline-none focus-within:border-l-8 focus-within:border-e73002 shadow-md"> 
    <div class="grid grid-cols-5 gap-4 ">
        <select id="small" class="col-end-6 col-span-1 block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                onchange="document.getElementById('UploudBerkas').style.display = (this.value === 'UploudBerkas' ? 'grid' : 'none'); 
                          document.getElementById('invitationSelection').style.display = (this.value === 'Invitation'  ? 'grid' : 'none');
                          document.getElementById('challengeSelection').style.display = (this.value === 'Challenge'  ? 'grid' : 'none');
                          ">
            <option>Tipe seleksi</option>
            <option selected value="UploudBerkas">Uploud Berkas</option>
            <option value="Invitation">Invitation</option>
            <option value="Challenge">Challenge</option>
        </select>
    </div>
    <div id="UploudBerkas" class="grid grid-cols-5 gap-4" style="display: grid;">
        <form class="col-span-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Berkas</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 " placeholder="Masukkan deskripsi seleksi"></textarea>
        </form>
    </div>
    <div id="invitationSelection" class="grid grid-cols-5 gap-4" style="display: none;">
        <form class="col-span-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Invitation</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 " placeholder="Masukkan deskripsi seleksi"></textarea>
        </form>
    </div>
    <div id="challengeSelection" class="grid grid-cols-5 gap-4" style="display: none;">
        <form class="col-span-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi challange</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 " placeholder="Masukkan deskripsi seleksi"></textarea>
        </form>
    </div>
</div>
