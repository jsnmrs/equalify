<?php
// Helpers
require_once('helpers/get_properties.php');
?>


<div class="container">
    <h1 class="display-5 my-4">Equalify Settings</h1>
    <section class="my-2">
        <h2 class="my-4">Properties</h2>
        <div class="row row-cols-3 g-4 gx-4">

        <?php
        // Start properties query.
        $existing_properties = get_properties();
        if(!empty($existing_properties)): foreach($existing_properties as $property):
        ?>
        
        <div class="col">
            <div class="card p-4">
                <div class="h5 m-0"> 
                                        
                    <?php 
                    // Property Name.
                    echo $property['property_name'];

                    // Archived badge is helpful to show what properties
                    // aren't being scanned.
                    if($property['property_archived'] == 1)
                        echo ' <span class="badge text-bg-secondary" aria-label="status">Archived</span>';
                    ?>

                    <a class="icon-link float-end" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="index.php?view=property_settings&property_id=<?php echo $property['property_id'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        <span class="visually-hidden">Edit Property</span>
                    </a>
                </div>
            </div>
        </div>

        <?php
        // End properties query.
        endforeach; endif;
        ?>

        </div>
        <p>
            <a class="btn btn-primary mt-3" href="index.php?view=property_settings">Add Property</a>
        </p>
    </section>
</div>