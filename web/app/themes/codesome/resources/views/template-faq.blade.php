{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@php
$items = get_field('items');
@endphp

@section('content')
  <main class="relative bg-yellow-1 min-h-[1000px]">
    <img src="@asset('images/faq-image-l.webp')" class="hidden md:block absolute top-0 left-0 mt-20" alt="">
    <img src="@asset('images/faq-image-r.webp')" class="hidden md:block absolute top-0 right-0 mt-20" alt="">
    <img src="@asset('images/faq-image-b.webp')" class="md:hidden absolute bottom-0 w-full" alt="">
    @while(have_posts()) @php(the_post())
      <div class="h-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 1920.001 49.731">
          <path id="Subtraction_15" data-name="Subtraction 15" d="M-10762.169-1674.269h0c-.476-.5-.894-.94-1.336-1.4l-.1-.107-.261-.274-.964-1.01c-1.382.067-2.76.137-4.093.2l-.073,0V-1724h403.134c-.968,1.067-2,2.21-2.989,3.316l-.706.036-2.812.14-2.289.114-.662-.638-1.354-1.3-.553-.533-.594-.572c-2.985.147-5.872.291-8.546.426l-1.946.1-1.245.062c-.595.609-1.136,1.157-1.659,1.688l-.376.381c-.37.374-.729.737-1.084,1.1-.619-.651-1.159-1.214-1.73-1.811l-.227-.237-.646-.674c-9.146.458-18.536.93-27.617,1.386l-3.491.175-4.095.206-26.556,1.333c-1.264-1.087-2.419-2.081-3.772-3.249-1.5.077-3.345.17-5.8.292-.271.293-.578.623-.909.979l-.432.464c-.5.535-1.038,1.114-1.589,1.708l-.156-.146-1.587-1.5-.774-.734-.588-.556-.365.408-.642.718c-.677.758-1.348,1.507-1.929,2.161-1.975.091-3.929.187-5.811.286-.8-.7-1.526-1.327-2.166-1.88l-.208-.18-.222-.192-.563-.489-1.675,1.64-.774.758-1.473,1.441-.807-.524c-1.324-.862-2.652-1.727-4.058-2.643l-.982.814-.325.269c-.89.736-1.92,1.59-3.136,2.6-.922-.728-1.8-1.417-2.686-2.118l-1.319-1.041-.6-.474-.065.079c-.514.622-1.218,1.474-1.935,2.353a5.127,5.127,0,0,1-3.442,1.108c-.519,0-1.04-.041-1.545-.08h-.007c-.522-.045-1.033-.084-1.534-.084-.082,0-.164,0-.242,0l-1.848-1.646-1.249-1.113a3.659,3.659,0,0,0-1.177-.214c-1.288,0-2.146.865-3.055,1.78a6.379,6.379,0,0,1-3.274,2.126c-.885-.579-2.417-1.587-4.7-3.094l-32.319,1.62-6.445.323-5.076.255-.354.386-.72.784-.5.547-1.335,1.456c-.544-.506-1.122-1.043-1.77-1.643l-.133-.124-1.225-1.136c-1.044,1.122-2.052,2.2-3,3.213-.859-.9-1.593-1.663-2.8-2.932-2.1.1-4.344.216-6.518.326l-.824.042c-2.584.13-5.1.257-7.472.373l-1.781-1.863-.257-.267-.5-.525-.392-.409-1.136,1.126-.1.1c-.472.468-1.1,1.094-1.8,1.779l-.729-.664-.637-.581-1.705-1.554c-.573.637-1.242,1.384-1.986,2.219a4.934,4.934,0,0,0-.321.41l-.006.008c-.234.323-.477.656-.727.669-10.958.6-22.072,1.156-32.82,1.7l-.2.01-1.008.051-4.353.219c-.467.567-.9,1.1-1.329,1.612q-.215.26-.427.517l-.352.425a7.821,7.821,0,0,1-4.587,1.158c-.337,0-.681-.008-.984-.016h-.062l-.067,0h-.058c-.3-.006-.611-.013-.912-.013a7.927,7.927,0,0,0-2.833.411c-1.2-1.255-1.912-2-2.881-3.022l-9.17.461-2.738.138-6.092.306c-.19.183-.48.463-.857.828l-.288.278c-.491.475-1.089,1.052-1.752,1.689-.42-.36-.876-.748-1.358-1.159l-.16-.136c-.461-.392-.941-.8-1.43-1.219-2.47,1.257-3.411,3.727-4.406,6.343a25.73,25.73,0,0,1-1.739,3.9c-.669-1.948-1.334-3.9-2.033-5.959a3.412,3.412,0,0,0-2.152-.961c-1.44,0-2.588,1.428-3.915,3.08q-.24.3-.489.6l-11.4.573-1.285.065c-4.632.233-9.422.474-13.979.7l-.813.985-.375.455c-.552.668-1.016,1.229-1.558,1.887l-1.124.056-.757.038c-5.02.25-10.21.509-14.824.744a7.666,7.666,0,0,0-2.683,2.118c-.932,1-1.811,1.937-3.124,1.938a3.455,3.455,0,0,1-1.161-.218l-.788,1.88-4.723,11.256-3.086,7.355Zm1700.073-1.5h0l-1.153-1.077-.728-.679-1.635-1.525-5.569.279-1.6.08c-3.89.194-8.729.435-13.312.669-1.066-1.034-2.064-2-3.121-3.015l-.137-.131-.123-.119c-7.126.354-14.341.716-21.119,1.057l-14.262.716c-1.145-1.086-2.25-2.143-3.2-3.057a3.559,3.559,0,0,0-1.182-.222c-1.321,0-2.218.944-3.167,1.944a8.29,8.29,0,0,1-2.761,2.172c-1.113-.649-2.757-1.6-5.864-3.408-1.548.075-3.685.183-5.946.3l-.938.047-3.147.159-.653.033-.905-.945-.169-.177c-.659-.689-1.18-1.233-1.766-1.85l-2.722.137c-7.065.357-13.991.706-21.032,1.057-.537.582-1.643,1.782-3.011,3.276-1.707.079-3.594.175-5.259.26l-.53.027c-.877-.842-1.892-1.822-3.194-3.086l-3.541.179-.207.01-1.572.079-.577.029-.281.34c-.692.836-1.318,1.593-2.3,2.781l-.81-.622c-.637-.49-1.367-1.051-2.293-1.762l-.041-.031-1.186-.1c-1.618-.13-3.472-.279-5.266-.421-.812-.845-1.537-1.6-2.771-2.9-14.025.7-24.989,1.256-35.551,1.789-1.144-1.2-1.895-1.989-2.832-2.965-8.862.438-17.744.883-26.4,1.325l-.313-.293-1.141-1.067c-.665-.623-1.333-1.249-2.038-1.907l-2.3.115-.741.037c-1.857.093-3.777.189-5.716.288l-.365.4c-.87.961-1.771,1.955-2.632,2.9l-1.032-.949-1.053-.969-1.066-.982-.25.3c-.727.878-1.353,1.636-2.245,2.727-.919-.742-1.939-1.562-3.191-2.565-1.073,1.073-1.987,1.984-2.954,2.943-.925-.913-1.869-1.842-2.869-2.826l-.459-.451c-1.059-1.041-2.184-2.149-3.418-3.366-2.354,1.452-4.8,2.966-7.274,4.5-.595-.457-1.187-.914-1.843-1.422l-.526-.407-1.508-1.165c-.756.721-1.748,1.662-2.967,2.816-1.729.091-3.686.189-5.819.292-.581-.514-1.565-1.387-2.965-2.633l-.915.793c-1.087.941-2.26,1.957-3.685,3.188-.961-.783-1.849-1.5-2.707-2.2l-.088-.071-1.729-1.406c-1.011,1.1-2.016,2.2-3.359,3.649-.769-.329-1.546-.723-2.3-1.1a16.624,16.624,0,0,0-5.338-1.988c-.256-.03-.513-.056-.762-.081l-.061-.006c-2.144-.215-4.169-.419-5.621-2.883l-3.76.188-.48.024c-4.434.222-9.02.452-13.933.7a4.348,4.348,0,0,0-1.441,1.417c-.761.992-1.623,2.116-3.072,2.116a3.563,3.563,0,0,1-1.187-.223c-.567-.548-1.2-1.149-1.858-1.784l-.232-.222c-.36-.344-.73-.7-1.106-1.059l-2.465.123-.595.03c-1.885.094-3.79.189-5.686.285q-.538-.522-1.064-1.037-1.129-1.1-2.233-2.171c-1.043.1-2.062.2-2.921.292-.728.878-1.4,1.689-2.046,2.479a4.394,4.394,0,0,0-.373.333,1.531,1.531,0,0,1-.781.518c-2.824.186-5.594.322-8.271.453l-.244.012c-.934.046-1.816.09-2.679.135-1.162-1-2.059-1.782-2.85-2.469l-.265-.23-.559-.485a8.777,8.777,0,0,0-4.375,2.26c-1.425,1.108-2.769,2.153-4.424,2.153a4.467,4.467,0,0,1-2.016-.512c-1.448-1.076-3.034-2.254-5.08-3.781l-1.022.929-.247.224c-1.13,1.026-2.3,2.087-3.793,3.442-.593-.8-1.254-1.685-2.084-2.8l-.475-.638c-.842-1.129-1.713-2.3-2.457-3.3l-2.129.109-.939.048c-1.99.1-3.66.188-5.513.279-1.254,1.042-2.766,2.3-4.679,3.9l-.113.094-2.908-1.758-.534-.323-2.921-1.767c-.684.565-1.443,1.195-2.3,1.908l-1.475,1.222-.848.7q-.406-1.294-.866-2.745l-.022-.07c-.286-.9-.6-1.88-.94-2.974-.791-.14-1.675-.3-2.665-.477l-.983-.177-.21.237c-1.146,1.3-2.125,2.4-3.142,3.554-1.808.09-3.854.193-5.633.287-.592.61-1.141,1.174-1.667,1.714l-.252.258-1.194,1.228-1.035-1.083-.312-.326c-.507-.53-1.115-1.167-1.972-2.066-1.225,2.513-2.523,5.189-4.084,8.421l-3.423-3.34-1.47-1.435-.926-.9-1.522-1.486c-.719.752-1.418,1.488-2.035,2.137l-.289.3-.269.283-.556.585a3.856,3.856,0,0,1-.528.037,7.4,7.4,0,0,1-3.954-1.653l-.035-.025a7.681,7.681,0,0,0-4.121-1.665,5.553,5.553,0,0,0-3.133,1.1l-2.232-3.309-.289-.427-1.057-1.565-1.566-2.32-1.971,2.235-.051.058c-1.705,1.935-3.177,3.605-4.584,5.2-.539-.485-1.043-.937-1.577-1.416l-.177-.158c-.628-.562-1.271-1.14-1.986-1.783-.9.548-1.809,1.094-2.751,1.662s-2.052,1.238-3.251,1.965c-.135-.631-.263-1.24-.39-1.845l-.147-.7c-.159-.759-.325-1.543-.5-2.366a2.219,2.219,0,0,1-.174-.232l0-.005c-.187-.268-.443-.635-.724-.657-1.369-.109-2.769-.164-4.157-.164a48.178,48.178,0,0,0-8.231.68c-.42.51-.777.945-1.107,1.347l-.2.243c-.5.6-.964,1.173-1.525,1.848l-.374-1.1c-.274-.815-.54-1.6-.8-2.385l-.286-.849-.488-1.451a3.083,3.083,0,0,0-2.5-1.04c-.389,0-.779.035-1.192.072l-.03,0c-.4.035-.844.075-1.3.075a5.213,5.213,0,0,1-2.776-.721l-.145-.15-.321-.334-.354-.37-.591-.616a8.6,8.6,0,0,0-3.754-.763,27.63,27.63,0,0,0-3.975.395c-.812.119-1.652.243-2.515.328l-.085.383c-.071.315-.144.64-.221.985-.228,1.015-.51,2.278-.9,4.048a2.171,2.171,0,0,1-2.155,1.231,7.177,7.177,0,0,1-2.7-.659l-.158-.738c-.221-1.024-.488-2.263-.789-3.651a5.011,5.011,0,0,1-.491-.407l-.027-.025a2.793,2.793,0,0,0-1.557-.91h-.027c-7.091.27-14.039.622-21.4.995l-.08,0c-2.091.106-4.523.23-6.943.349-.648.668-1.377,1.411-2.148,2.2l-.62.632-.415.424c-.908-.826-1.944-1.764-3.17-2.868l-3.233.164-.484.025-1.942.1q-.724-.7-1.419-1.372c-.562-.545-1.227-1.189-1.9-1.834-1.912.1-3.837.194-5.8.3l-1.336.069-1.72.088c-.4.479-.777.939-1.178,1.427l-.147.179-.068.082c-.242.3-.49.6-.747.907a10.506,10.506,0,0,1-5.341,1.2c-.782,0-1.572-.041-2.336-.081h-.024c-.7-.036-1.421-.073-2.129-.079l-1.093-1.143-.15-.157-.3-.319-.938-.981c-7.924.4-17.156.859-29.054,1.459l-3.613-2.949a13.68,13.68,0,0,0-2.2,1.626c-1.328,1.121-2.7,2.278-4.41,2.278a4.6,4.6,0,0,1-2.189-.6l-.65-.609-2.764-2.6c-2.8.144-5.727.291-8.25.416l-.726.036c-1.836.092-3.663.183-5.462.275l-3.981-3.215-.176-.142c-2.735.691-4.132,2.537-5.482,4.322a17.354,17.354,0,0,1-1.931,2.276c-1.461-.205-2.4-1.176-3.484-2.3a10.554,10.554,0,0,0-4.637-3.205c-.141.009-1.377.071-3.779.191l-.283.014-.78-.738c-.97-.919-1.8-1.7-2.679-2.532-5.924.3-11.966.6-17.613.883l-2.829.142-11.931.6-.959-.923-.373-.359c-.717-.689-1.411-1.358-2.062-1.988l-4.568.233-.215.011-.544.028-3.321.169c-1.178-1.073-2.231-2.037-3.452-3.155l-.056-.05c-.7,2.367-1.269,4.324-1.859,6.346-2.271-1.167-4.54-2.335-6.78-3.489l-.5-.26-4.558-2.346c-1.379,1.521-2.444,2.7-3.56,3.935-.646-.631-1.343-1.313-2.13-2.086-.271-.094-.549-.221-.817-.345l-.009,0a4.215,4.215,0,0,0-1.673-.515l-.082,0c-8.479.368-17.047.8-25.333,1.223l-5.783.293-.42,1.07c-.288.734-.575,1.463-.862,2.194-.454,1.155-.909,2.312-1.374,3.5-1.705-1.575-1.624-3.458-1.546-5.279a10.261,10.261,0,0,0-.113-2.7,8.123,8.123,0,0,1-.688-.68c-.481-.513-.979-1.043-1.46-1.043h-.027c-9.311.376-18.614.847-27.611,1.3l-.973.049-6.313.318c-.726-.756-1.276-1.332-1.809-1.89l-.029-.03-.313-.328-.688-.72q-6.951.352-14.027.707l-1.159.058q-7,.351-14.054.708c-.434-.386-.855-.76-1.28-1.136l-.284-.252-.441-.392-1.664-1.477c-1.6.078-3.445.17-5.816.292-.429.476-.911,1.008-1.422,1.572l-.494.547c-.3.326-.6.66-.9.994l-.115.127c-.907-.851-1.946-1.815-3.176-2.948l-.122.148c-.644.775-1.31,1.58-2.383,2.887l-1.519-1.178-1.763-1.367-5.847.294-1.064.054-7.116.358-1.283-1.068-.442-.367-.384-.319-1.785-1.486-1.746.087h-.028l-.263.013c-1.092.054-2.34.117-3.76.185l-1.082,1.127-.073.077-.539.561-1.229,1.281c-1.26-1.167-2.236-2.075-3.168-2.944l-11.226.566-.577.029-1.8.09-7.111.358-.448-.523c-.405-.475-.889-1.04-1.025-1.194-.36-.314-.64-.6-.864-.83l0,0c-.374-.383-.6-.614-.825-.614h-.015c-7.593.328-15.272.717-22.7,1.092h-.008l-3.776.191c-.776-.809-1.535-1.6-2.278-2.386a18.188,18.188,0,0,0-5.652,2.982c-2.57,1.755-5.227,3.568-8.756,3.568a10.78,10.78,0,0,1-1.462-.1c-.633-1.014-1.393-2.235-2.127-3.417-.554-.892-1.257-2.023-1.778-2.858-2.711.136-4.5.224-6.039.3l-.761.038-.8.04c-.59.67-1.184,1.342-1.759,1.993l-.288.326-.467.528-.483.547-1.621.081-.472.024c-1.312.066-2.56.129-3.729.19-1.019-.945-1.918-1.775-2.664-2.461l-.871-.8c-2.865.14-5.829.285-8.416.419-1.3-1.087-2.311-1.93-3.286-2.744l-1.337,1.625-.993,1.206c-1.773.087-3.671.182-6.153.307l-1.358.068-5.013.25c-1.021-1.073-1.728-1.809-2.6-2.719-2.775.135-5.659.281-8.713.436l-.2.01c-.883.994-1.909,2.149-2.924,3.284a3.931,3.931,0,0,1-1.306.235c-1.447,0-2.57-.916-3.89-2.114a8.069,8.069,0,0,0-3.019-1.466,13.957,13.957,0,0,1-2.01-.771c-2.245-1.144-3.472-1.741-4.644-1.741-1.143,0-2.231.544-4.44,1.786-.313.175-.629.368-.935.554l-.014.008,0,0a9.894,9.894,0,0,1-2.8,1.335,5.983,5.983,0,0,1-1.342.136c-.531,0-1.068-.049-1.543-.093h-.007c-.39-.035-.758-.068-1.105-.077-.627-.659-1.152-1.21-1.795-1.882l-.3-.317-.829-.869-5.8.293-1.687.085c-5.383.271-10.949.552-16.211.814-1.378-1.447-2.085-2.185-2.691-2.816-1.451,1.3-2.866,2.578-4.587,4.13-1.458-1.2-2.7-2.208-3.892-3.185l-.044-.036-.686-.56-3.136.159-2.569.13-.511.026c-2.864.145-5.679.286-8.425.427l-1.481,1.573-.366.389-.48.51-1.434,1.523-1.486-.828-.333-.186c-1.164-.649-2.577-1.436-4.615-2.568l-1.421.072c-1.608.081-4.038.2-6.2.307l-.414-.434c-1.044-1.094-1.678-1.757-2.454-2.566l-4.11.2-1.4.069-3.51.174a5.17,5.17,0,0,0-1.5,1.476c-.787.992-1.68,2.117-3.121,2.118a3.545,3.545,0,0,1-1.181-.221l-1.145-1.117-.082-.079c-.658-.642-1.3-1.271-1.965-1.92-10.55.534-21.293,1.072-31.682,1.592l-.431.021-3.3.165c-1.066-1.01-2.087-1.982-2.987-2.841l-.167-.159-1.205,1.235c-.632.649-1.229,1.261-1.827,1.87-.517-.542-.98-1.027-1.49-1.559l-.934-.975-.2-.209-.776.755-.409.4c-.567.552-1.178,1.146-1.853,1.8-.73-.65-1.583-1.408-2.686-2.386l-.484-.431c-1.984.1-4.006.2-5.895.3-1.822.093-3.784.193-5.784.292l-.281.276-1.209,1.186c-1.008.986-1.917,1.878-2.863,2.809-1.852-1.46-3.312-2.611-5.07-3.995-2.472.116-5.391.263-8.44.424l-1-.9-.084-.076c-.83-.751-1.548-1.4-2.085-1.889-4.156.21-8.105.407-11.737.586-1.294,1.25-2.234,2.153-3.144,3.021l-.817-.854-.867-.907-.115-.121-.843-.882-9.439.475-5.273.266-3.7.187c-8.473.427-17.149.864-25.722,1.294l-2.142-1.969-1.322-1.217H-8849v42.594c-.687-.038-1.4-.058-2.17-.058-2.362,0-4.721.179-7.217.369l-.1.008c-2.31.178-4.928.379-7.519.379-1.039,0-2-.031-2.93-.1l-.337-.352-.1-.1c-.595-.621-1.21-1.264-2.046-2.143-5.221.263-47.088,1.918-87.576,3.518h-.023c-40.492,1.6-82.364,3.255-87.785,3.526l-.472-.383c-1.165-.948-2.164-1.759-3.512-2.849a4.5,4.5,0,0,0-2.074-.519c-1.76,0-3.339,1.055-5.01,2.171a13.536,13.536,0,0,1-4.224,2.17Z" transform="translate(10769 1723.999)" fill="#fff"/>
        </svg>
        <div class="relative relative max-w-[249px] mx-auto mt-12">
          <img src="@asset('images/faq-header-shape@2x.webp')" class="absolute w-full" alt="">
          <h1 class="relative font-ga text-45px text-center pt-1">
            @php(the_title())
          </h1>
        </div>
        @if($items)
          <div
            x-data="{
              show: null,
              toggleShow: function(id) {
                this.show = this.show === id ? null : id;
              }
            }"
            class="relative w-full max-w-[930px] px-4 lg:px-0 mx-auto mt-14 space-y-4">
            @foreach($items as $key => $item)
              <div class="bg-white px-8 py-4 rounded-3xl">
                <button @click="toggleShow({{ $key }})" class="relative block w-full font-ga text-xl sm:text-3xl text-left pr-8">
                  {{ $item['question'] }}
                  <svg xmlns="http://www.w3.org/2000/svg" :class="show === {{ $key }} ? 'rotate-180' : ''" class="absolute transition-transform right-0 top-0 mt-1 h-6 w-6 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div x-show="show === {{ $key }}" x-collapse>
                  <p class="text-base mt-2">
                    {!! $item['answer'] !!}
                  </p>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    @endwhile
  </main>
@endsection
