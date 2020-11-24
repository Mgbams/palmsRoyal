<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="A hotel reservation website development" />
    <meta name="keywords" content="palmsRoyal, rooms, hotel, reservation, hotel booking" />
    <meta name="author" content="Mgbams Kingsley" />

    <!------ Include the above in your HEAD tag ---------->


    <!--Used for datepicker-->
    <link rel="stylesheet" type="text/css" href="{{url('css/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Optional theme -->



    <!--main css file starts here-->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="parallax-world-of-ugg">

        <section>
            <div class="title" style="background-color: yellow;">
                <h3>Let's do some</h3>
                <h1>PARALLAX</h1>
            </div>
        </section>

        <section>
            <div class="parallax-one" style="display: flex; justify-content: space-between;">
                <div style="width: 38%; height: 50vh; border: 1px solid red;">
                    <!--Number of nights to be booked-->
                    <div id="numberOfNights" style="text-align: center;" class="col-2 offset-10"></div>

                    <!--single date picker-->
                    <div style="margin-top: 20px; display: flex; justify-content: space-between;" class="row">
                        <div class="col-sm-8 col-md-6" style="margin-top: 20px;">
                            <div><label>ARRIVAL</label></div>
                            <div><input type="text" name="arrival" value="11/24/2020" /></div>
                        </div>

                        <div class="col-sm-8 col-md-6" style="margin-top: 20px;">
                            <div><label>DEPARTURE</label></div>
                            <div><input type="text" name="departure" value="11/28/2020" /></div>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <div><label>GUEST(S)</label></div>
                        <select style="width:40%; font-size:0.9em;" id="PersonSelector" class="fieldDrop">
                            <option selected="selected disabled" value="0">All</option>

                            <option value="1">1</option>

                            <option value="2">2</option>

                            <option value="3">3</option>

                        </select>
                    </div>

                </div>
                <div style="width: 60%; height: 80vh; border: 1px solid blue;"></div>
            </div>
        </section>

        <section>
            <div class="block">
                <p><span class="first-character sc">I</span>n 1978, Brian Smith landed in Southern California with a bag of sheepskin boots and hope. He fell in love with the sheepskin experience and was convinced the world would one day share this love. The beaches of Southern California had long been an epicenter of a relaxed, casual lifestyle, a lifestyle that Brian felt was a perfect fit for his brand. So he founded the UGG brand, began selling his sheepskin boots and they were an immediate sensation. By the mid 1980's, the UGG brand became a symbol of relaxed southern California culture, gaining momentum through surf shops and other shops up and down the coast of California, from San Diego to Santa Cruz. UGG boots reached beyond the beach, popping up in big cities and small towns all over, and in every level of society. Girls wore their surfer boyfriend's pair of UGG boots like a letterman jacket. When winter came along, UGG boots were in ski shops and were seen in lodges from Mammoth to Aspen.</p>
                <p class="line-break margin-top-10"></p>
                <p class="margin-top-10">The UGG brand began to symbolize those who embraced sport and a relaxed, active lifestyle. More than that, an emotional connection and a true feeling of love began to grow for UGG boots, just as Brian had envisioned. People didn't just like wearing UGG boots, they fell in love with them and literally could not take them off. By the end of the 90's, celebrities and those in the fashion world took notice of the UGG brand. A cultural shift occurred as well - people were embracing, and feeling empowered, by living a more casual lifestyle and UGG became one of the symbols of this lifestyle. By 2000, a love that began on the beaches had become an icon of casual style. It was at this time that the love for UGG grew in the east, over the Rockies and in Chicago. In 2000, UGG Sheepskin boots were first featured on Oprah's Favorite Things® and Oprah emphatically declared that she "LOOOOOVES her UGG boots." From that point on, the world began to notice.</p>
            </div>
        </section>

        <section>
            <div class="parallax-two">
                <h2>NEW YORK</h2>
            </div>
        </section>

        <section>
            <div class="block">
                <p><span class="first-character ny">B</span>reaking into the New York fashion world is no easy task. But by the early 2000's, UGG Australia began to take it by storm. The evolution of UGG from a brand that made sheepskin boots, slippers, clogs and sandals for an active, outdoor lifestyle to a brand that was now being touted as a symbol of a stylish, casual and luxurious lifestyle was swift. Much of this was due to a brand repositioning effort that transformed UGG into a high-end luxury footwear maker. As a fashion brand, UGG advertisements now graced the pages of Vogue Magazine as well as other fashion books. In the mid 2000's, the desire for premium casual fashion was popping up all over the world and UGG was now perfectly aligned with this movement.</p>
                <p class="line-break margin-top-10"></p>
                <p class="margin-top-10">Fueled by celebrities from coast to coast wearing UGG boots and slippers on their downtime, an entirely new era of fashion was carved out. As a result, the desire and love for UGG increased as people wanted to go deeper into this relaxed UGG experience. UGG began offering numerous color and style variations on their sheepskin boots and slippers. Cold weather boots for women and men and leather casuals were added with great success. What started as a niche item, UGG sheepskin boots were now a must-have staple in everyone's wardrobe. More UGG collections followed, showcasing everything from knit boots to sneakers to wedges, all the while maintaining that luxurious feel UGG is known for all over the world. UGG products were now seen on runways and in fashion shoots from coast to coast. Before long, the love spread even further.</p>
            </div>
        </section>

        <section>
            <div class="parallax-three">
                <h2>ENCHANTED FOREST</h2>
            </div>
        </section>

        <section>
            <div class="block">
                <p><span class="first-character atw">W</span>hen the New York fashion community notices your brand, the world soon follows. The widespread love for UGG extended to Europe in the mid-2000's along with the stylish casual movement and demand for premium casual fashion. UGG boots and shoes were now seen walking the streets of London, Paris and Amsterdam with regularity. To meet the rising demand from new fans, UGG opened flagship stores in the UK and an additional location in Moscow. As the love spread farther East, concept stores were opened in Beijing, Shanghai and Tokyo. UGG Australia is now an international brand that is loved by all. This love is a result of a magical combination of the amazing functional benefits of sheepskin and the heightened emotional feeling you get when you slip them on your feet. In short, you just feel better all over when you wear UGG boots, slippers, and shoes.</p>
                <p class="line-break margin-top-10"></p>
                <p class="margin-top-10">In 2011, UGG will go back to its roots and focus on bringing the active men that brought the brand to life back with new styles allowing them to love the brand again as well. Partnering with Super Bowl champion and NFL MVP Tom Brady, UGG will invite even more men to feel the love the rest of the world knows so well. UGG will also step into the world of high fashion with UGG Collection. The UGG Collection fuses the timeless craft of Italian shoemaking with the reliable magic of sheepskin, bringing the luxurious feel of UGG to high end fashion. As the love for UGG continues to spread across the world, we have continued to offer new and unexpected ways to experience the brand. The UGG journey continues on and the love for UGG continues to spread.</p>
            </div>
        </section>

    </div>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            var arrival; //Declare an arrival variable to hold arrival dates

            // single date pickers starts HERE

            /***** ARRIVAL DATETIME PICKER *****/
            $('input[name="arrival"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                timePicker: true,
                locale: {
                    format: 'M/DD hh:mm A'
                },
                maxYear: 2030,
            }, function(start, end, label) {
                var years = moment().diff(start, 'years');
                //console.log(start);
                //alert("You are " + years + " years old!");
            });

            $('input[name="arrival"]').on('apply.daterangepicker', function(ev, picker) {
                var arrivalDate = picker.startDate.format('YYYY-MM-DD');
                arrival = new Date(arrivalDate).getTime();
            });

            /***** DEPARTURE DATETIME PICKER *****/
            $('input[name="departure"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                timePicker: true,
                locale: {
                    format: 'M/DD hh:mm A'
                },
                maxYear: 2030,
            }, function(start, end, label) {
                // var years = moment().diff(start, 'years');
                // alert("You are " + years + " years old!");
            });

            $('input[name="departure"]').on('apply.daterangepicker', function(ev, picker) {
                var departureDate = picker.startDate.format('YYYY-MM-DD');
                var departure = new Date(departureDate).getTime(); // Convert datetime to milliseconds

                var differenceInMilliseconds = departure - arrival; // Diff between arrival and departure dates in milliseconds
                console.log("differenceInMilliseconds  " + differenceInMilliseconds);
                var differenceInDays = Math.ceil(differenceInMilliseconds / (1000 * 3600 * 24)); // Diff between arrival and departure dates in Days

                if (differenceInDays == 0 || differenceInDays < 0) {
                    alert("Please Enter a valid date range");
                } else {
                    $('#numberOfNights').html(differenceInDays);
                    $('#numberOfNights').append("<p>Night(s)</p>");
                    $('#numberOfNights').css("border", "1px solid yellow");
                    //alert(differenceInDays);
                }

            });

            // single date pickers end HERE
        });
    </script>

</body>

</html>