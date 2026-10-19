<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Digital Card</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0d0e12;
            color: #ffffff;
        }
        .font-serif-custom {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-0 sm:p-4 bg-black">

    <!-- Mobile Screen Frame Container -->
    <div class="w-full max-w-[420px] bg-[#121316] rounded-none sm:rounded-[36px] overflow-hidden shadow-2xl border border-[#22242b] flex flex-col min-h-screen sm:min-h-0">
        
        <!-- Hero Header Section -->
        <div class="relative h-[410px] w-full flex flex-col justify-between p-6">
            
            <!-- Image Background with Dark Overlay Gradient -->
            <div class="absolute inset-0 z-0">
                <img src="{{ $profile['hero_image'] }}" alt="{{ $profile['name'] }}" class="w-full h-full object-cover object-top">
                <div class="absolute inset-0 bg-gradient-to-t from-[#121316] via-[#121316]/60 to-black/40"></div>
            </div>

            <!-- Top Pill Status Badge -->
            <div class="relative z-10 self-start">
                <div class="inline-flex items-center gap-2 bg-black/40 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-white/10 text-xs font-medium tracking-wide">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-gray-200">{{ $profile['status'] }}</span>
                </div>
            </div>

            <!-- Header Content -->
            <div class="relative z-10 mb-2">
                <div class="flex items-center gap-1.5 text-[11px] font-semibold tracking-widest text-[#d9be8b] uppercase mb-1">
                    <i class="fas fa-sparkles text-[10px]"></i>
                    <span>{{ $profile['company'] }}</span>
                </div>

                <h1 class="text-4xl font-serif-custom font-normal tracking-tight text-white mb-3">
                    {{ $profile['name'] }}
                </h1>

                <p class="text-sm text-gray-300 leading-relaxed font-normal">
                    {{ $profile['bio'] }}
                </p>
            </div>
        </div>

        <!-- Links List Section -->
        <div class="p-6 pt-2 space-y-3">
            @foreach($profile['links'] as $link)
                <a href="{{ $link['url'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3.5 bg-[#1a1b20] border border-[#2a2c34] rounded-2xl hover:bg-[#22242c] transition duration-200 group">
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-xl bg-[#23252c] flex items-center justify-center text-[#d9be8b] border border-[#30333d]">
                            <i class="{{ $link['icon'] }} text-base"></i>
                        </div>
                        
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-0.5">
                                {{ $link['label'] }}
                            </span>
                            <span class="block text-sm font-semibold text-white group-hover:text-[#d9be8b] transition">
                                {{ $link['value'] }}
                            </span>
                        </div>
                    </div>

                    <div class="text-gray-500 group-hover:text-white group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition duration-200 pr-2">
                        <i class="fas fa-arrow-up-right text-sm"></i>
                    </div>
                </a>
            @endforeach

            <!-- Divider Line -->
            <div class="pt-4 pb-2">
                <div class="border-t border-[#22242b]"></div>
            </div>

            <!-- Footer Branding -->
            <div class="flex items-center justify-center gap-3 py-2">
                <div class="font-serif-custom text-2xl font-bold tracking-wider text-[#d9be8b] border-r border-[#2a2c34] pr-3 leading-none">
                    {{ $profile['footer_logo'] }}
                </div>
                <div class="text-[9px] font-bold tracking-widest text-gray-500 uppercase leading-tight">
                    <div>{{ $profile['footer_text_line1'] }}</div>
                    <div>{{ $profile['footer_text_line2'] }}</div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>