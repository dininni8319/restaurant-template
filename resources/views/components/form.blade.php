
        {{-- <form action="" method="post" action="{{ route('contact.store') }}"> --}}
        <form class="form" method="POST" action="">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div>
                <h2 class="text-blue fw-bold fs-1">Reserve</h2>
            </div>
            <div class="form-group">
                <label>Firstname Lastname</label>
                <input type="text" class="form-inputs" name="name" value="{{old('name')}}" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-inputs" name="email" value="{{old('email')}}" required>
            </div>
            
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-inputs" name="phone" value="{{old('phone')}}" required>
            </div>
            
            <div class="form-group">
                <label>Number of people</label>
                <input type="text" class="form-inputs" name="subject" value="{{old('subject')}}" required>
            </div>
            
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-inputs" name="message" rows="4" required>{{old('message')}}</textarea>
            </div>
            <div class="form-group">
                <button class="btn-contact">Submit</button>
            </div>
            <p class="text-data">Your data will be not shared! Thank you for your consideration!</p>
            
        </form>

     