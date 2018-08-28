@component('mail::message')

Good day,

You have received a new enquiry, the details are below:
<br><br>
Name: {{$email['name']}}<br>
Phone Number: {{$email['phoneNum']}}<br>
Email: {{$email['email']}}<br>
Message: <br>
{{$email['name']}}

Kind Regards<br>
Bluffhill Hiring Services                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 

@endcomponent
