<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-appear.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/odometer.min.js"></script>
<script src="/js/circle-progressbar.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src='/js/splitting.min.js'></script>
<script src='/js/scrolltrigger.min.js'></script>
<script src='/js/gsap.min.js'></script>
<script src='/js/gsap-animation.js'></script>
<script src='/js/img-reveal.js'></script>
<script src='/js/swiper-bundle.min.js'></script>
<script src='/js/lifeplus-swiper-init.js'></script>
<script src="/js/color-customize/color-customizer.js"></script>
<script src='/js/theme-script.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        const formData = new FormData(event.target);
        const jsonData = {
            fields: []
        };

        // Map form data to the desired JSON format
        const fieldMappings = {
            "txtName": "firstname",
            "txtPhone": "phone",
            "txtDate": "appointment_date",
            "txtMessage": "message1"
            // Add mappings for other fields as needed
        };

        for (const [inputName, jsonName] of Object.entries(fieldMappings)) {
            const value = formData.get(inputName);
            if (value) {
                jsonData.fields.push({
                    objectTypeId: "0-1",
                    name: jsonName,
                    value: value
                });
            }
        }

        // HubSpot API endpoint
        const portalId = "46088827"; // Your HubSpot portal ID
        const formId = "59102f9b-15a4-4a65-9b2c-4e0b710d31ae";

        // Define the HubSpot form submission endpoint
        const endpoint =
            `https://api.hsforms.com/submissions/v3/integration/submit/46088827/59102f9b-15a4-4a65-9b2c-4e0b710d31ae`;

        // Make a POST request to HubSpot API
        fetch(endpoint, {
                method: 'POST',
                body: JSON.stringify(jsonData),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                //   Swal.fire("Success");

                console.log('Form submission successful:', data);
                document.getElementById("contact-form").reset();
                showSuccessModal2();
                // Optionally, display success message or redirect to a thank you page
            })
            .catch(error => {
                // Swal.fire("Error");

                console.error('Error submitting form:', error);

                // Optionally, display error message to the user
            });

        // Display the success modal

        // Optionally, reset the form
        // event.target.reset();
    });
    document.getElementById("newsletter-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        const formData = new FormData(event.target);
        const jsonData = {
            fields: []
        };

        // Map form data to the desired JSON format
        const fieldMappings = {
            "email": "email",
            // Add mappings for other fields as needed
        };

        for (const [inputName, jsonName] of Object.entries(fieldMappings)) {
            const value = formData.get(inputName);
            if (value) {
                jsonData.fields.push({
                    objectTypeId: "0-1",
                    name: jsonName,
                    value: value
                });
            }
        }

        // HubSpot API endpoint
        const portalId = "46088827"; // Your HubSpot portal ID
        const formId = "7e5360c6-6714-45be-a689-e853d6f266cb";

        // Define the HubSpot form submission endpoint
        const endpoint =
            `https://api.hsforms.com/submissions/v3/integration/submit/46088827/7e5360c6-6714-45be-a689-e853d6f266cb`;

        // Make a POST request to HubSpot API
        fetch(endpoint, {
                method: 'POST',
                body: JSON.stringify(jsonData),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                //   Swal.fire("Success");

                console.log('Form submission successful:', data);
                document.getElementById("newsletter-form").reset();
                swal('Success!!!', 'You have subscribed for newsletters', 'success');
                // Optionally, display success message or redirect to a thank you page
            })
            .catch(error => {
                // Swal.fire("Error");

                console.error('Error submitting form:', error);

                // Optionally, display error message to the user
            });

        // Display the success modal

        // Optionally, reset the form
        // event.target.reset();
    });

    function showSuccessModal2() {
        swal('Success!!!', 'Your form has been submitted.', 'success');
        //var modal2 = document.getElementById("successModal2");
        //modal2.style.display = "block";

        // Set a timer to close the modal after 3 seconds
        setTimeout(function() {
            //modal2.style.display = "none";
        }, 3000); // 3000 milliseconds = 3 seconds
    }
</script>
<script>
    function requestAppointment() {
        var appointmentWindow = window.open(
            "https://in.bestosys.com/appointmentWizard.jsp?authToken=016851483951421000 ", "Request Appointment",
            "width=570, height=450");
    }
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#commentForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route('comments.store') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        // Refresh the page to show the new comment

                        location.reload();
                    }
                },
                error: function(response) {
                    // Handle validation errors here
                    alert('Error adding comment');
                }
            });
        });
    });
</script>
