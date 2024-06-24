<div id="pathsContainer" class="relative mb-4 md:mb-5"> 
   <div id="pathTemplate" tabindex="0" class="path-selection mb-2 rounded-md p-4 bg-white focus:outline-none focus-within:border-l-8 focus-within:border-e73002 shadow-md" style="display: none;">
    <div class="flex flex-wrap gap-4">
        <div class="flex items-center justify-center w-10 h-10 z-0 bg-e73002 text-center rounded-md mb-5">
            <span class="text-white text-base font-bold">1</span>
        </div>
        
        <div class="relative flex-1 min-w-[200px] mb-5 group">
            <input type="text" name="pathTittle" id="pathTittle" class="block py-2.5 px-0 w-full text-sm " placeholder="Masukkan Judul" required />
            <label for="pathTittle" class="peer-focus:font-medium absolute text-sm text-gray-500 "></label>
        </div>
        
        <select class="type-selection block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 flex-none min-w-[150px] sm:w-auto">
            <option selected>Pilih tipe</option>
            <option value="uploudBerkas">Uploud Berkas</option>
            <option value="meetInvitation">Meet Invitation</option>
            <option value="Challange">Challange</option>
        </select>
    </div>
       <div class="uploud-berkas grid grid-cols-5 gap-4" style="display: none;">Konten Uploud Berkas</div>
       <div class="challange-selection grid grid-cols-5 gap-4" style="display: none;">Konten Challange</div>
       <div class="meet-invitation-selection grid grid-cols-5 gap-4" style="display: none;">Konten Meet Invitation</div>
       
       <div class="flex justify-between items-center border-t border-gray-200 rounded-b dark:border-gray-600">
           <div class="flex gap-2 items-center">
               <button type="button" class="btn-up-path w-8 h-8 mt-4 text-black hover:bg-gray-300 font-medium rounded-full text-sm flex items-center justify-center">
                   Up Path
               </button>
               <button type="button" class="btn-down-path w-8 h-8 mt-4 text-black hover:bg-gray-300 font-medium rounded-full text-sm flex items-center justify-center">
                   Down Path
               </button>
           </div>
           <button type="button" class="btn-delete-path w-8 h-8 mt-4 text-black hover:bg-gray-300 font-medium rounded-full text-sm flex items-center justify-center">
               Delete Path
           </button>
       </div>
   </div>
   <button id="addPathBtn" class="text-gray-600 gap-2 border border-dashed inline-flex w-full justify-center hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">
       Tambah Path
   </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const pathsContainer = document.getElementById('pathsContainer');
    const pathTemplate = document.getElementById('pathTemplate');
    const addPathBtn = document.getElementById('addPathBtn');

    function updatePathNumbers() {
        const paths = pathsContainer.querySelectorAll('.path-selection');
        paths.forEach((path, index) => {
            path.querySelector('span').textContent = index + 1;
        });
    }

    addPathBtn.addEventListener('click', () => {
        const newPath = pathTemplate.cloneNode(true);
        newPath.style.display = 'block';
        newPath.removeAttribute('id');
        pathsContainer.insertBefore(newPath, addPathBtn);

        const typeSelection = newPath.querySelector('.type-selection');
        typeSelection.addEventListener('change', (event) => {
            const value = event.target.value;
            newPath.querySelector('.uploud-berkas').style.display = (value === 'uploudBerkas' ? 'grid' : 'none');
            newPath.querySelector('.challange-selection').style.display = (value === 'Challange' ? 'grid' : 'none');
            newPath.querySelector('.meet-invitation-selection').style.display = (value === 'meetInvitation' ? 'grid' : 'none');
        });

        newPath.querySelector('.btn-up-path').addEventListener('click', () => {
            const prevSibling = newPath.previousElementSibling;
            if (prevSibling && prevSibling !== pathTemplate) {
                pathsContainer.insertBefore(newPath, prevSibling);
                updatePathNumbers();
            }
        });

        newPath.querySelector('.btn-down-path').addEventListener('click', () => {
            const nextSibling = newPath.nextElementSibling;
            if (nextSibling && nextSibling !== addPathBtn) {
                pathsContainer.insertBefore(nextSibling, newPath);
                updatePathNumbers();
            }
        });

        newPath.querySelector('.btn-delete-path').addEventListener('click', () => {
            pathsContainer.removeChild(newPath);
            updatePathNumbers();
        });

        updatePathNumbers();
    });

    updatePathNumbers();
});
   </script>